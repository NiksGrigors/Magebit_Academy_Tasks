<?php
namespace Magebit\Faq\Api;

interface FaqManagementInterface
{
    public function enableQuestion($id);

    public function disableQuestion($id);
}
