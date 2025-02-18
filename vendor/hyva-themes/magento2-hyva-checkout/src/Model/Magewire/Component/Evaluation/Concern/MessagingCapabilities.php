<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes 2022-present. All rights reserved.
 * This product is licensed per Magento install
 * See https://hyva.io/license
 */

declare(strict_types=1);

namespace Hyva\Checkout\Model\Magewire\Component\Evaluation\Concern;

trait MessagingCapabilities
{
    private string $messageText = 'Something went wrong.';
    private string $messageType = 'error';

    public function withMessage(string $message): self
    {
        $this->messageText = ucfirst($message);

        return $this;
    }

    public function hasMessage(): bool
    {
        return strlen($this->messageText) !== 0;
    }

    public function withDataDrivenMessage(string $message, array $data): self
    {
        return $this->withMessage(sprintf($message, $data));
    }

    /**
     * Bind a custom type different from the default. Applying custom types
     * could require some additional work such as configuration or styling.
     */
    public function asCustomType(string $type): self
    {
        $this->messageType = $type;

        return $this;
    }

    /**
     * Display as a warning styled message.
     */
    public function asWarning(): self
    {
        return $this->asCustomType('warning');
    }

    /**
     * Display as a error styled message.
     */
    public function asError(): self
    {
        return $this->asCustomType('error');
    }

    /**
     * Display as an informal styled message.
     */
    public function asInformally(): self
    {
        return $this->asCustomType('info');
    }
}
