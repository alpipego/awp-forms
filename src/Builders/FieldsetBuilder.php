<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Builders;

use Alpipego\AWP\Forms\Elements\{Fieldset, FieldsetInterface};
use Alpipego\AWP\Forms\Renderers\{Fieldset as FieldsetRenderer};

class FieldsetBuilder extends AbstractBuilder
{
    public function __construct(FieldsetInterface $fieldset = null)
    {
        $this->setParent($fieldset ?? new Fieldset(new FieldsetRenderer()));
    }

    public function fieldset(): FieldsetInterface
    {
        return $this->parent;
    }
}
