<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Magewire\Checkout\Payment;

use Hyva\Checkout\Model\Magewire\Component\EvaluationInterface;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultFactory;
use Hyva\Checkout\Model\Magewire\Component\EvaluationResultInterface;
use Magento\Checkout\Model\Session as SessionCheckout;
use Magento\Framework\Exception\LocalizedException;
use Magento\Payment\Api\Data\PaymentMethodInterface;
use Magento\Quote\Api\CartRepositoryInterface;
use Magewirephp\Magewire\Component;

class MethodList extends Component implements EvaluationInterface
{
    public ?string $method = null;

    protected $listeners = [
        'billing_address_saved' => 'refresh',
        'shipping_address_saved' => 'refresh',
        'coupon_code_applied' => 'refresh',
        'coupon_code_revoked' => 'refresh',
    ];

    protected $loader = [
        'method' => 'Saving method'
    ];

    protected SessionCheckout $sessionCheckout;
    protected CartRepositoryInterface $cartRepository;
    protected EvaluationResultFactory $evaluationResultFactory;

    public function __construct(
        SessionCheckout $sessionCheckout,
        CartRepositoryInterface $cartRepository,
        EvaluationResultFactory $evaluationResultFactory
    ) {
        $this->sessionCheckout = $sessionCheckout;
        $this->cartRepository = $cartRepository;
        $this->evaluationResultFactory = $evaluationResultFactory;
    }

    public function boot(): void
    {
        try {
            $method = $this->sessionCheckout->getQuote()->getPayment()->getMethod();
        } catch (LocalizedException $exception) {
            $method = null;
        }

        $this->method = $method;
    }

    public function updatedMethod(string $value): string
    {
        try {
            $quote = $this->sessionCheckout->getQuote();
            $quote->getPayment()->setMethod($value);

            $this->cartRepository->save($quote);

            $this->dispatchBrowserEvent('checkout:payment:method-activate', ['method' => $value]);
            $this->emit('payment_method_selected');
        } catch (LocalizedException $exception) {
            $this->dispatchErrorMessage('Something went wrong while saving your payment preferences.');
        }

        return $value;
    }

    public function evaluateCompletion(EvaluationResultFactory $resultFactory): EvaluationResultInterface
    {
        if ($this->method === null) {
            return $resultFactory->createErrorMessageEvent()
                ->withCustomEvent('payment:method:error')
                ->withMessage('The payment method is missing. Select the payment method and try again.');
        }

        return $resultFactory->createSuccess([], 'payment:method:success');
    }
}
