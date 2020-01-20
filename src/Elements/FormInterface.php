<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

/**
 * Interface FormInterface
 * @package Alpipego\AWP\Forms\Elements
 *
 * @property $wrapper
 *
 * @method self setName(string $name) : ElementInterface
 * @method self setId(string $id) : ElementInterface
 * @method self addClass(string $class) : ClassesInterface
 * @method self addClasses(array $classes) : ClassesInterface
 */
interface FormInterface extends ElementInterface
{
    public function setAction(string $action): self;

    public function getAction(): ?string;

    public function setMethod(string $method): self;

    public function getMethod(): ?string;

    public function setAutocomplete(string $autocomplete): self;

    public function getAutocomplete(): ?string;

    public function setEnctype(string $enctype): self;

    public function getEnctype(): ?string;

    public function setNovalidate(bool $novalidate): self;

    public function getNovalidate(): ?bool;

    public function setTarget(string $target): self;

    public function getTarget(): ?string;

    public function wrapElements(string $string) : self;
}
