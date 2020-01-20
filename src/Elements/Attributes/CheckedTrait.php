<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait CheckedTrait
{
    public function setChecked(bool $checked = true): CheckedInterface
    {
        return $this->simpleSetter(__FUNCTION__, $checked);
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }
}
