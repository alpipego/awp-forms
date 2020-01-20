<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{ListInterface,
    MultipleInterface,
    PatternInterface,
    PlaceholderInterface,
    RequiredInterface,
    SizeInterface};

/**
 * Interface EmailInterface
 * @package Alpipego\AWP\Forms\Elements\Inputs
 *
 * @method self addClass(string $class): ClassesInterface
 * @method self addClasses(array $classes) : ClassesInterface
 * @method self setId(string $id) : ElementInterface
 * @method self setName(string $name) : ElementInterface
 * @method self setAutocomplete(string $autocomplete) : InputInterface
 * @method self setAutofocus(bool $autofocus) : InputInterface
 * @method self setDisabled(bool $disabled = false) : InputInterface
 * @method self setForm(string $form) : InputInterface
 * @method self setLabel(string $label) : InputInterface
 * @method self setReadOnly(bool $readonly = false) : InputInterface
 * @method self setTabindex(int $tabindex) : InputInterface
 * @method self setValue($value) : InputInterface
 * @method self setList(string $list) : ListInterface
 * @method self setPlaceholder(string $placeholder) : PlaceholderInterface
 * @method self setRequired(bool $required = true) : RequiredInterface
 * @method self setPattern(string $pattern) : PatternInterface
 * @method self setMultiple(bool $multiple = true) : MultipleInterface
 */
interface EmailInterface extends InputInterface, PatternInterface, ListInterface, PlaceholderInterface, RequiredInterface, MultipleInterface, SizeInterface
{

}
