<?php
namespace Magebit\Faq\Model;

use Magebit\Faq\Api\Data\FaqInterface;
use Magento\Framework\Model\AbstractModel;

class Faq extends AbstractModel implements FaqInterface
{
    protected function _construct(): void
    {
        $this->_init(\Magebit\Faq\Model\ResourceModel\Faq::class);
    }

    public function getId(): ?int
    {
        return $this->getData(self::ID);
    }

    public function getQuestion(): string
    {
        return $this->getData(self::QUESTION);
    }

    public function setQuestion($question): static
    {
        return $this->setData(self::QUESTION, $question);
    }

    public function getAnswer(): string
    {
        return $this->getData(self::ANSWER);
    }

    public function setAnswer($answer): static
    {
        return $this->setData(self::ANSWER, $answer);
    }

    public function getStatus(): int
    {
        return $this->getData(self::STATUS);
    }

    public function setStatus($status): static
    {
        return $this->setData(self::STATUS, $status);
    }

    public function getPosition(): int
    {
        return $this->getData(self::POSITION);
    }

    public function setPosition($position): static
    {
        return $this->setData(self::POSITION, $position);
    }

    public function getUpdatedAt(): ?string
    {
        return $this->getData(self::UPDATED_AT);
    }
}
