<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\DisabledInterface;
use Alpipego\AWP\Forms\Elements\Attributes\FormInterface;
use Alpipego\AWP\Forms\Elements\ClassesInterface;
use Alpipego\AWP\Forms\Elements\ElementInterface;

/**
 * Interface InputInterface
 * @package Alpipego\AWP\Forms\Elements\Inputs
 *
 * @method self addClass(string $class) : ClassesInterface
 * @method self addClasses(array $classes) : ClassesInterface
 * @method self setName(string $name) : ElementInterface
 * @method self setId(string $id) : ElementInterface
 */
interface InputInterface extends ElementInterface, DisabledInterface, FormInterface
{
    public function setAutocomplete(string $autocomplete): self;

    public function getAutocomplete(): ?string;

    public function setAutofocus(bool $autofocus = true): self;

    public function getAutofocus(): ?bool;

    public function setReadOnly(bool $readonly = true): self;

    public function getReadOnly(): ?bool;

    public function setTabindex(int $tabindex): self;

    public function getTabindex(): ?int;

//    public function setType(string $type): self;

    public function getType(): ?string;

//    public function setLabel(string $label): self;
//
//    public function getLabel(): ?string;

    public function setValue($value): self;

    public function getValue() : ?string;

    public function setInputmode(string $mode): self;

    public function getInputmode(): ?string;
}
