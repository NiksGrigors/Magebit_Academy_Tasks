<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Model\Magewire\Component\Evaluation;

use Hyva\Checkout\Model\Magewire\Component\Evaluation\Concern\MessagingCapabilities;
use Hyva\Checkout\Model\Magewire\Component\Evaluation\Concern\ResultCapabilities;
use Hyva\Checkout\Model\Magewire\Component\Evaluation\Concern\TaggingCapabilities;
use Hyva\Checkout\Model\Magewire\Hydrator\Evaluation;
use Magewirephp\Magewire\Component;

class MessageDialog extends EvaluationResult
{
    use MessagingCapabilities;
    use ResultCapabilities;
    use TaggingCapabilities;

    public const TYPE = 'message_dialog';

    private Evaluation $evaluationHydrator;

    private string $messageTitle;
    private ?Executable $confirmationCallback = null;

    public function __construct(
        string $title,
        Evaluation $evaluationHydrator
    ) {
        $this->messageTitle = $title;

        $this->evaluationHydrator = $evaluationHydrator;
    }

    public function getArguments(Component $component): array
    {
        $arguments = [
            'title' => __($this->messageTitle),
            'text' => __($this->messageText),
            'type' => $this->messageType
        ];

        if ($this->confirmationCallback) {
            $arguments['callback'] = $this->evaluationHydrator->compileEvaluationResult($component, $this->confirmationCallback);
        }

        return $arguments;
    }

    public function withTitle(string $title): self
    {
        $this->messageTitle = $title;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->messageTitle;
    }

    /**
     * Assigns an `Executable` instance as a confirmation callback,
     * which will be triggered when confirmation is needed.
     */
    public function withConfirmationCallback(Executable $callback): self
    {
        $this->confirmationCallback = $callback;

        return $this;
    }

    public function hasConfirmationCallback(): bool
    {
        return $this->confirmationCallback !== null;
    }

    public function getConfirmationCallback(): ?Executable
    {
        return $this->confirmationCallback;
    }

    /**
     * Sets the dialog message type to 'success'.
     */
    public function asSuccess(): self
    {
        $this->messageType = 'success';

        return $this;
    }
}
