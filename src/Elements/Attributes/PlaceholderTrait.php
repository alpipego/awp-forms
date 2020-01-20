<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait PlaceholderTrait
{
    public function setPlaceholder(string $placeholder): PlaceholderInterface
    {
        return $this->simpleSetter(__FUNCTION__, $placeholder);
    }

    public function getPlaceholder(): ?string
    {
        return $this->placeholder;
    }
}
