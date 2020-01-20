<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait MinMaxLengthTrait
{
    protected $maxlength;
    protected $minlength;

    public function setMaxlength(int $maxlength): MinMaxLengthInterface
    {
        return $this->simpleSetter(__METHOD__, $maxlength);
    }

    public function getMaxlength(): ?int
    {
        return $this->maxlength;
    }

    public function setMinlength(int $minlength): MinMaxLengthInterface
    {
        return $this->simpleSetter(__METHOD__, $minlength);
    }

    public function getMinlength(): ?int
    {
        return $this->minlength;
    }
}
