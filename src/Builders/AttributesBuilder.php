<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Builders;

use Alpipego\AWP\Forms\Exceptions\AttributeException;

class AttributesBuilder implements AttributesBuilderInterface
{
    public static function bool(string $attr, bool $value): string
    {
        return $attr;
    }

    public static function single(string $attr, $value): string
    {
        return sprintf('%s="%s"', $attr, $value);
    }

    public static function multiple(string $attr, array $value, string $delimiter = ' '): string
    {
        return sprintf('%s="%s"', $attr, implode($delimiter, $value));
    }

    public static function build(string $attr, $value): string
    {
        if (is_bool($value)) {
            return self::bool($attr, $value);
        }

        if (is_string($value) || is_numeric($value)) {
            return self::single($attr, $value);
        }

        if (is_array($value)) {
            return self::multiple($attr, $value);
        }

        throw new AttributeException(sprintf('Invalid type "%s" for value for attribute "%s"', gettype($value), $attr));
    }
}
