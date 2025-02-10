<?php

declare(strict_types=1);

namespace Magebit\Faq\Api;

interface FaqManagementInterface
{
    /**
     * @param int $id
     * @return void
     */
    public function enableQuestion(int $id): void;

    /**
     * @param int $id
     * @return void
     */
    public function disableQuestion(int $id): void;
}
