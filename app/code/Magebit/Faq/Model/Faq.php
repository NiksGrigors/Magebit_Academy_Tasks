<?php

declare(strict_types=1);

namespace Magebit\Faq\Model;

use Magebit\Faq\Api\Data\FaqInterface;
use Magento\Framework\Model\AbstractModel;
use Magebit\Faq\Model\ResourceModel\Faq as ResourceModel;

class Faq extends AbstractModel implements FaqInterface
{
    protected function _construct(): void
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @return int|null
     */
    public function getId(): int|null
    {
        if ($this->getData(self::ID) === null) {
            return null; //for creating new records
        }

        return (int)$this->getData(self::ID); //for existing records edit
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->getData(self::QUESTION);
    }

    /**
     * @param string $question
     * @return $this
     */
    public function setQuestion(string $question): static
    {
        return $this->setData(self::QUESTION, $question);
    }

    /**
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->getData(self::ANSWER);
    }

    /**
     * @param string $answer
     * @return $this
     */
    public function setAnswer(string $answer): static
    {
        return $this->setData(self::ANSWER, $answer);
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->getData(self::STATUS);
    }

    /**
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status): static
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->getData(self::POSITION);
    }

    /**
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position): static
    {
        return $this->setData(self::POSITION, $position);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->getData(self::UPDATED_AT);
    }
}
