<?php

namespace JordJD\PHPSummary;

class SentenceTokenizer
{
    private $content = null;

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function getSentences(): array
    {
        if ($this->content === null || !trim($this->content)) {
            return [];
        }

        return array_map(
            'trim',
            preg_split('/(?<=[.!?])(?:\s+|$)/', trim($this->content), -1, PREG_SPLIT_NO_EMPTY)
        );
    }
}
