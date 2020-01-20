<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait DisabledTrait
{
    public function setDisabled(bool $disabled = true): DisabledInterface
    {
        return $this->simpleSetter(__FUNCTION__, $disabled);
    }

    public function getDisabled(): ?bool
    {
        return $this->disabled;
    }
}
