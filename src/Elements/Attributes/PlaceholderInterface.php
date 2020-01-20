<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface PlaceholderInterface
{
    public function setPlaceholder(string $placeholder): self;

    public function getPlaceholder(): ?string;
}
