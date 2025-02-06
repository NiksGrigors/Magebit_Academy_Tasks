<?php

declare(strict_types=1);

namespace Magebit\Faq\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Faq extends AbstractDb
{
    private const string TABLE_NAME = 'magebit_faq';
    private const string PRIMARY_KEY = 'id';

    protected function _construct(): void
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->getData('id');
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->getData('question');
    }

    /**
     * @param string $question
     * @return void
     */
    public function setQuestion(string $question): void
    {
        $this->setData('question', $question);
    }

    /**
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->getData('answer');
    }

    /**
     * @param string $answer
     * @return void
     */
    public function setAnswer(string $answer): void
    {
        $this->setData('answer', $answer);
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->getData('status');
    }

    /**
     * @param int $status
     * @return void
     */
    public function setStatus(int $status): void
    {
        $this->setData('status', $status);
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->getData('position');
    }

    /**
     * @param int $position
     * @return void
     */
    public function setPosition(int $position): void
    {
        $this->setData('position', $position);
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->getData('updated_at');
    }
}
