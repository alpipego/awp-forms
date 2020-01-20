<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Renderers;

use Alpipego\AWP\Forms\Elements\ElementInterface;
use Alpipego\AWP\Forms\Elements\FormInterface;

class Form extends AbstractRenderer
{
//    const TEMPLATE = '<form %s>%s</form>';
    const TEMPLATE = "<form %s>\n\r%s\n\r</form>";

    /**
     * @param FormInterface $form
     * @param array|null $children
     *
     * @return string
     */
    public function render(ElementInterface $form, array $children = null): string
    {
        $this->checkType($form, FormInterface::class);

        $fields = is_null($children) ? [] : $this->renderChildren($children);

        if ( ! is_null($form->wrapper)) {
            array_walk($fields, function (&$input) use ($form) {
                $input = sprintf($form->wrapper, $input);
            });
        }

        return sprintf(self::TEMPLATE, Attributes::render($form), implode("\n\r", $fields));
    }
}
