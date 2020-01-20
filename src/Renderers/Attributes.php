<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Renderers;

use Alpipego\AWP\Forms\Builders\AttributesBuilder;
use Alpipego\AWP\Forms\Elements\ElementInterface;
use Alpipego\AWP\Forms\Elements\Inputs\Button;

class Attributes
{
    public static function render(ElementInterface $element): string
    {
        return implode(' ', self::collect($element));
    }

    public static function collect(ElementInterface $element): array
    {
        $getters = array_filter(get_class_methods($element), function ($method) {
            return 'get' === substr($method, 0, 3);
        });

        $props = array_map(function ($method) {
            return strtolower(substr($method, 3, strlen($method)));
        }, $getters);

        $values = [];
        array_map(function (string $prop, string $method) use ($element, &$values) {
            $values[$prop] = $element->$method();
        }, $props, $getters);

        $values = array_filter($values, function($value) {
            return !is_null($value);
        });

        if ($element instanceof Button) {
//            echo '<code><pre>';
//            var_dump($values);
//            echo '</pre></code>';
        }

        $attributes = [];
        foreach ($values as $attribute => $value) {
            $attributes[] = AttributesBuilder::build($attribute, $value);
        }

        return array_reverse($attributes);
    }
}
