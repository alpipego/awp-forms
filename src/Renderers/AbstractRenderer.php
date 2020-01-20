<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Renderers;

use Alpipego\AWP\Forms\Elements\ElementInterface;

abstract class AbstractRenderer
{
    const TEMPLATE = '';

    abstract public function render(ElementInterface $element, array $children = null): string;

    protected function checkType(ElementInterface $element, string $expected)
    {
        if ( ! is_subclass_of($element, $expected)) {
            throw new \UnexpectedValueException(sprintf('%s has to implement %s.', get_class($element), $expected));
        }
    }

    protected function renderChildren(array $children): array
    {
        $fields = [];
        if (empty($children)) {
            return $fields;
        }
        foreach ($children as $child) {
            if (is_string($child)) {
                $fields[] = $child;
                continue;
            }
            /** @var ElementInterface $child */
            $fields[] = $child->renderer()->render($child);
        }

        return $fields;
    }
}
