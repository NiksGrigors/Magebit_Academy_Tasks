<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Model\Magewire\Hydrator;

use Exception;
use Hyva\Checkout\Magewire\Main;
use Hyva\Checkout\Model\ConfigData\HyvaThemes\SystemConfigExperimental;
use Hyva\Checkout\Model\Magewire\Component\Evaluation\EvaluationResult;
use Hyva\Checkout\Model\Magewire\Component\EvaluationInterface;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultFactory;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultInterface;
use Hyva\Checkout\Model\Session as SessionCheckoutConfig;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Event\ManagerInterface as EventManagerInterface;
use Magento\Framework\Serialize\SerializerInterface;
use Magewirephp\Magewire\Component;
use Magewirephp\Magewire\Model\HydratorInterface;
use Magewirephp\Magewire\Model\LayoutRenderLifecycle;
use Magewirephp\Magewire\Model\RequestInterface;
use Magewirephp\Magewire\Model\ResponseInterface;

class Evaluation implements HydratorInterface
{
    protected SessionCheckoutConfig $sessionCheckoutConfig;
    protected EventManagerInterface $eventManager;
    protected EvaluationResultFactory $evaluationResultFactory;
    protected LayoutRenderLifecycle $layoutRenderLifecycle;
    protected SerializerInterface $serializer;
    protected SystemConfigExperimental $systemConfigExperimental;

    private array $evaluations = [];

    public function __construct(
        SessionCheckoutConfig $sessionCheckoutConfig,
        EventManagerInterface $eventManager,
        EvaluationResultFactory $evaluationResultFactory,
        LayoutRenderLifecycle $layoutRenderLifecycle,
        SerializerInterface $serializer,
        SystemConfigExperimental $systemConfigExperimental = null
    ) {
        $this->sessionCheckoutConfig = $sessionCheckoutConfig;
        $this->eventManager = $eventManager;
        $this->evaluationResultFactory = $evaluationResultFactory;
        $this->layoutRenderLifecycle = $layoutRenderLifecycle;
        $this->serializer = $serializer;
        $this->systemConfigExperimental = $systemConfigExperimental
            ?: ObjectManager::getInstance()->get(SystemConfigExperimental::class);
    }

    // phpcs:ignore
    public function hydrate(Component $component, RequestInterface $request): void
    {
    }

    public function dehydrate(Component $component, ResponseInterface $response): void
    {
        if ($this->canHydrate($component) === false || ! $this->isEvaluationComponent($component)) {
            return;
        }

        $evaluationResult = $this->evaluateComponent($component);

        // This block is part of an experimental feature, currently enabled by default.
        if ($this->systemConfigExperimental->disableMainEvaluationResultMerge()) {
            $response->memo['evaluation'] = [$component->id => $evaluationResult];
            return;
        }

        // In future versions of the checkout, the below code will be deprecated and subject to removal.
        $this->evaluations[$component->id] = $evaluationResult;
        $response->memo['evaluation'] = $component::COMPONENT_TYPE === Main::COMPONENT_TYPE
            ? $this->evaluations
            : [$component->id => $evaluationResult];
    }

    public function isEvaluationComponent(Component $component): bool
    {
        return $component instanceof EvaluationInterface;
    }

    /**
     * @param Component & EvaluationInterface $component
     */
    public function evaluateComponent(Component $component): array
    {
        try {
            $evaluationCompletionResult = $component->evaluateCompletion($this->evaluationResultFactory);
        } catch (Exception $exception) {
            $evaluationCompletionResult = $this->evaluationResultFactory->createErrorMessage()
                ->withMessage($exception->getMessage())
                ->asWarning()
                ->dispatch();
        }

        return $this->compileEvaluationResult($component, $evaluationCompletionResult);
    }

    public function compileEvaluationResult(Component $component, EvaluationResultInterface $result): array
    {
        $data = [
            'arguments' => $result->getArguments($component),
            'dispatch' => false,
            'result' => $result->getResult(),
            'group' => $result->getType() . '-' . $component->id,
            'type' => $result->getType(),
            'id' => $component->id,

            // @deprecated blocking is defined by a blocking capability trait and should sit in the arguments array.
            'blocking' => $result->isBlocking()
        ];

        if ($result instanceof EvaluationResult) {
            $data['name'] = $result->getName();

            if (method_exists($result, 'canDispatch')) {
                $data['dispatch'] = $result->canDispatch();
            }
        }

        $data['hash'] = sha1(json_encode($data));
        return $data;
    }

    /**
     * Validate if the current component needs to be de- or hydrated.
     */
    public function canHydrate(Component $component): bool
    {
        $current = $this->sessionCheckoutConfig->getCurrentStep();

        if ($current === false) {
            return false;
        }

        $previous = $this->sessionCheckoutConfig->getPreviousStep();

        if (($previous === null && $current !== null)
            || (is_array($current)
                && is_array($previous)
                && $current['position'] !== $previous['position'])) {
            return true;
        }

        $parent = $component->getParent();
        return $parent && $this->layoutRenderLifecycle->isChild($parent->getNameInLayout());
    }
}
