<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

use Alpipego\AWP\Forms\Elements\Attributes\DisabledInterface;
use Alpipego\AWP\Forms\Elements\Attributes\DisabledTrait;
use Alpipego\AWP\Forms\Elements\Attributes\FormInterface;
use Alpipego\AWP\Forms\Elements\Attributes\FormTrait;

/**
 * @method self addClass(string $class)
 * @method self addClasses(array $classes)
 */
class Fieldset extends Element implements FieldsetInterface
{
    use DisabledTrait;
    use FormTrait;

    protected $legend;

    public function setLegend(string $legend): FieldsetInterface
    {
        return $this->simpleSetter(__FUNCTION__, $legend);
    }

    public function getLegend(): ?string
    {
        return $this->legend;
    }
}
