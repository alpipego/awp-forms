<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

use Alpipego\AWP\Forms\Elements\Attributes\DisabledInterface;
use Alpipego\AWP\Forms\Elements\Attributes\FormInterface as FormAttributeInterface;

interface FieldsetInterface extends ElementInterface, DisabledInterface, FormAttributeInterface
{
    public function setLegend(string $legend) : self;

    public function getLegend() : ?string;
}
