<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{CheckedInterface, RequiredInterface};

/**
 * Interface CheckboxInterface
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
 * @method self setReadOnly(bool $readonly = false) : InputInterface
 * @method self setTabindex(int $tabindex) : InputInterface
 * @method self setValue($value) : InputInterface
 * @method self setRequired(bool $required = true) : RequiredInterface
 * @method self setChecked(bool $checked = true) : CheckedInterface
 */
interface CheckboxRadioInterface extends InputInterface, RequiredInterface, CheckedInterface
{

}
