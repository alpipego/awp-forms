<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface SizeInterface
{
    public function setSize(int $size): self;

    public function getSize(): ?int;
}
