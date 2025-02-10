<?php

declare(strict_types=1);

namespace Magebit\Faq\Api\Data;

interface FaqInterface
{
    const ID = 'id';
    const QUESTION = 'question';
    const ANSWER = 'answer';
    const STATUS = 'status';
    const POSITION = 'position';
    const UPDATED_AT = 'updated_at';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId(): int|null;

    /**
     * Get question
     *
     * @return string
     */
    public function getQuestion(): string;

    /**
     * Set question
     *
     * @param string $question
     * @return $this
     */
    public function setQuestion(string $question): static;

    /**
     * Get answer
     *
     * @return string
     */
    public function getAnswer(): string;

    /**
     * Set answer
     *
     * @param string $answer
     * @return $this
     */
    public function setAnswer(string $answer): static;

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus(): int;

    /**
     * Set status
     *
     * @param int $status
     * @return $this
     */
    public function setStatus(int $status): static;

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition(): int;

    /**
     * Set position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition(int $position): static;

    /**
     * Get updated_at
     *
     * @return string|null
     */
    public function getUpdatedAt(): ?string;
}
