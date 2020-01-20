<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface PatternInterface
{
    public function setPattern(string $pattern): self;

    public function getPattern(): ?string;
}
