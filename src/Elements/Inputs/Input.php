<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\{Attributes\DisabledTrait, Attributes\FormTrait, Element, SetterTrait};
use Alpipego\AWP\Forms\Exceptions\AttributeException;
use Alpipego\AWP\Forms\Renderers\AbstractRenderer;

class Input extends Element implements InputInterface
{
    use SetterTrait;
    use DisabledTrait;
    use FormTrait;

    protected $alt;
    protected $autocomplete;
    protected $autofocus;
    protected $disabled;
    protected $form;
    protected $formaction;
    protected $formenctype;
    protected $formetarget;
    protected $formmethod;
    protected $formnovalidate;
    protected $height;
    protected $inputmode;
    protected $label;
    protected $list;
    protected $max;
    protected $maxlength;
    protected $min;
    protected $minlength;
    protected $multiple;
    protected $readonly;
    protected $required;
    protected $size;
    protected $src;
    protected $step;
    protected $tabindex;
    protected $type;
    protected $value;
    protected $width;
    protected $checked;

    public function __construct(string $type, AbstractRenderer $renderer)
    {
        $this->type = $type;
        parent::__construct($renderer);
    }

    public function setAutocomplete(string $autocomplete): InputInterface
    {
        return $this->constrictedSetter(__FUNCTION__, [
            'on',
            'off',
            'name',
            'email',
            'username',
            'new-password',
            'current-password',
            'one-time-code',
            'organization-title',
            'organization',
            'street-address',
            'address-line1',
            'address-line2',
            'address-line3',
            'address-level1',
            'address-level2',
            'address-level3',
            'address-level4',
            'country',
            'country-name',
            'postal-code',
            'cc-name',
            'cc-given-name',
            'cc-additional-name',
            'cc-family-name',
            'cc-number',
            'cc-exp',
            'cc-exp-month',
            'cc-exp-year',
            'cc-csc',
            'cc-type',
            'transaction-currency',
            'transaction-amount',
            'language',
            'bday',
            'bday-day',
            'bday-month',
            'bday-year',
            'sex',
            'tel',
            'tel-extension',
            'impp',
            'url',
            'photo',
        ], $autocomplete);
    }

    public function getAutocomplete(): ?string
    {
        return $this->autocomplete;
    }

    public function setAutofocus(bool $autofocus = true): InputInterface
    {
        return $this->simpleSetter(__FUNCTION__, $autofocus);
    }

    public function getAutofocus(): ?bool
    {
        return $this->autofocus;
    }

    public function setReadOnly(bool $readonly = true): InputInterface
    {
        if ($this->required) {
            throw new AttributeException('Because a read-only field cannot have a value, the required attribute is not permitted on inputs with the readonly attribute specified.');
        }

        return $this->simpleSetter(__FUNCTION__, $readonly);
    }

    public function getReadOnly(): ?bool
    {
        return $this->readonly;
    }

    public function setTabindex(int $tabindex): InputInterface
    {
        return $this->simpleSetter(__FUNCTION__, $tabindex);
    }

    public function getTabindex(): ?int
    {
        return $this->tabindex;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setValue($value): InputInterface
    {
        return $this->simpleSetter(__FUNCTION__, $value);
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setInputmode(string $mode): InputInterface
    {
        return $this->constrictedSetter(__FUNCTION__,
            ['none', 'text', 'decimal', 'numeric', 'tel', 'search', 'email', 'url'], $mode);
    }

    public function getInputmode(): ?string
    {
        return $this->inputmode;
    }
}
