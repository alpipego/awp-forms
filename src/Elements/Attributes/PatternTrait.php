<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait PatternTrait
{
    public function setPattern(string $pattern): PatternInterface
    {
        return $this->simpleSetter(__METHOD__, $pattern);
    }

    public function getPattern(): ?string
    {
        return $this->pattern;
    }
}
