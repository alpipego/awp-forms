<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait MultipleTrait
{
    public function setMultiple(bool $multiple = true): MultipleInterface
    {
        return $this->simpleSetter(__METHOD__, $multiple);
    }

    public function getMultiple(): ?bool {
        return $this->multiple;
    }
}
