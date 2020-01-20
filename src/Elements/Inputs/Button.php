<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

class Button extends Input implements InputInterface
{
    public function getAutocomplete(): ?string
    {
        return null;
    }
}
