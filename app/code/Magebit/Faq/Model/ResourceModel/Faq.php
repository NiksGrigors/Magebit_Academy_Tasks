<?php

declare(strict_types=1);

namespace Magebit\Faq\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Faq extends AbstractDb
{
    private const TABLE_NAME = 'magebit_faq';
    private const PRIMARY_KEY = 'id';

    protected function _construct(): void
    {
        $this->_init(self::TABLE_NAME, self::PRIMARY_KEY);
    }

    public function getId()
    {
        return $this->getData('id');
    }

    public function getQuestion()
    {
        return $this->getData('question');
    }

    public function setQuestion($question)
    {
        $this->setData('question', $question);
    }

    public function getAnswer()
    {
        return $this->getData('answer');
    }

    public function setAnswer($answer)
    {
        $this->setData('answer', $answer);
    }

    public function getStatus()
    {
        return $this->getData('status');
    }

    public function setStatus($status)
    {
        $this->setData('status', $status);
    }

    public function getPosition()
    {
        return $this->getData('position');
    }

    public function setPosition($position)
    {
        $this->setData('position', $position);
    }

    public function getUpdatedAt()
    {
        return $this->getData('updated_at');
    }

}
