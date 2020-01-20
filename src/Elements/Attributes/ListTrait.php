<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait ListTrait
{
    public function setList(string $list) : ListInterface
    {
        return $this->simpleSetter(__METHOD__, $list);
    }

    public function getList() : ?string
    {
        return $this->list;
    }
}
