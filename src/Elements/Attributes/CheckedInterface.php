<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface CheckedInterface
{
    public function setChecked(bool $checked = true): self;

    public function getChecked(): ?bool;
}
