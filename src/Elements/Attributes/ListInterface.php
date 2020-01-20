<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface ListInterface
{
    public function setList(string $list) : self;

    public function getList() : ?string;
}
