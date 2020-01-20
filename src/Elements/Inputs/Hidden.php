<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

class Hidden extends Input implements HiddenInterface
{
    public function setAutofocus(bool $autofocus = true): InputInterface
    {
        unset($this->autofocus);

        return $this;
    }

    public function getAutofocus(): ?bool
    {
        return null;
    }
}
