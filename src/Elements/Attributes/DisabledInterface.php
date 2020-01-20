<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface DisabledInterface
{
    public function setDisabled(bool $disabled = true): self;

    public function getDisabled(): ?bool;
}
