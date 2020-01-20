<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{ListInterface,
    MinMaxLengthInterface,
    PatternInterface,
    PlaceholderInterface,
    RequiredInterface,
    SizeInterface};

/**
 * Interface TextInterface
 * @package Alpipego\AWP\Forms\Elements\Inputs
 *
 * @method self setId(string $id) : ElementInterface
 * @method self setName(string $name) : ElementInterface
 * @method self setAutocomplete(string $autocomplete) : InputInterface
 * @method self setAutofocus(bool $autofocus) : InputInterface
 * @method self setDisabled(bool $disabled = false) : InputInterface
 * @method self setForm(string $form) : InputInterface
 * @method self setReadOnly(bool $readonly = false) : InputInterface
 * @method self setTabindex(int $tabindex) : InputInterface
 * @method self setValue($value) : InputInterface
 * @method self setList(string $list) : ListInterface
 * @method self setMaxlength(int $maxlength) : MinMaxLengthInterface
 * @method self setMinlength(int $minlength) : MinMaxLengthInterface
 * @method self setPattern(string $pattern) : PatternInterface
 * @method self setPlaceholder(string $placeholder) : PlaceholderInterface
 * @method self setRequired(bool $required = true) : RequiredInterface
 */
interface TextInterface extends InputInterface, PatternInterface, MinMaxLengthInterface, PlaceholderInterface, RequiredInterface, ListInterface, SizeInterface
{

}
