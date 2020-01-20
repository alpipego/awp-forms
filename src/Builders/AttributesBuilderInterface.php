<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Builders;

interface AttributesBuilderInterface
{
    public static function bool(string $attr, bool $value): string;

    /**
     * @param string $attr
     * @param string|int|float $value
     *
     * @return string
     */
    public static function single(string $attr, $value): string;

    public static function multiple(string $attr, array $value, string $delimiter): string;

    public static function build(string $attr, $value) : string;
}
