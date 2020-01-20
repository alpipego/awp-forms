<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface RequiredInterface
{
    public function setRequired(bool $required = true): self;

    public function getRequired(): ?bool;
}
