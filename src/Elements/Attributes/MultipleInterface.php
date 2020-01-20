<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface MultipleInterface
{
    public function setMultiple(bool $multiple = true): self;

    public function getMultiple(): ?bool;
}
