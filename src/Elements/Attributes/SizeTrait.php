<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait SizeTrait
{
    public function setSize(int $size): SizeInterface
    {
        return $this->simpleSetter(__FUNCTION__, $size);
    }

    public function getSize():?int
    {
        return $this->size;
    }
}
