<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

use Alpipego\AWP\Forms\Exceptions\AttributeException;
use Alpipego\AWP\Forms\Exceptions\FormException;

trait SetterTrait
{
    protected function simpleSetter(string $method, $value)
    {
        $this->{$this->getVarName($method)} = $value;

        return $this;
    }

    protected function constrictedSetter(string $method, array $constraints, $value)
    {
        $var = $this->getVarName($method);

        if ( ! in_array($value, $constraints)) {
            throw new FormException(sprintf(
                '%s has to be one of "%s", %s given.',
                $var,
                implode('","', $constraints),
                $value
            ));
        }

        $this->{$var} = $value;

        return $this;
    }

    protected function regexSetter(string $method, string $regex, string $value)
    {
        if ( ! preg_match($regex, $value)) {
            throw new AttributeException(sprintf('"%s" does not match required RegEx "%s"', $value, $regex));
        }
        $this->{$this->getVarName($method)} = $value;

        return $this;
    }

    private function getVarName(string $method): string
    {
        $methodArr = explode('::', $method);

        return strtolower(str_replace('set', '', end($methodArr)));
    }
}
