<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface MinMaxLengthInterface
{
    public function setMaxlength(int $maxlength): self;

    public function getMaxlength(): ?int;

    public function setMinlength(int $minlength): self;

    public function getMinlength(): ?int;
}
