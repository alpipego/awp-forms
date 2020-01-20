<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

interface ClassesInterface
{
    public function addClass(string $class) : self;

    public function addClasses(array $classes): self;

    public function getClasses(): ?array;
}
