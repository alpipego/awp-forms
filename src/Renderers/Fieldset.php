<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Renderers;

use Alpipego\AWP\Forms\Elements\ElementInterface;
use Alpipego\AWP\Forms\Elements\FieldsetInterface;

class Fieldset extends AbstractRenderer
{
    const TEMPLATE = '<fieldset %s>%s</fieldset>';

    /**
     * @param FieldsetInterface $element
     * @param array|null $children
     *
     * @return string
     */
    public function render(ElementInterface $fieldset, array $children = null): string
    {
        $this->checkType($fieldset, FieldsetInterface::class);
        $inputs = is_null($children) ? [] : $this->renderChildren($children);

        return sprintf(self::TEMPLATE, Attributes::render($fieldset), implode("\n\r", $inputs));
    }
}
