<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Builders;

use Alpipego\AWP\Forms\Elements\{FieldsetInterface, Form, FormInterface};
use Alpipego\AWP\Forms\Renderers\{AbstractRenderer, Form as FormRenderer};

class FormBuilder extends AbstractBuilder
{
    /**
     * @var FormInterface $parent
     */
    protected $parent;
    protected $impartedAttributes = ['autocomplete'];

    public function __construct(FormInterface $form = null)
    {
        $this->setParent($form ?? new Form($renderer ?? new FormRenderer()));
    }

    public function form(): FormInterface
    {
        return $this->parent;
    }

    public function addFieldset(
        FieldsetInterface $fieldset = null,
        AbstractRenderer $fieldsetRenderer = null
    ) {
//        $fieldset         = $fieldset ?? new $this->typeMapper['fieldset']($fieldsetRenderer ?? new $this->rendererMapper['fieldset']);
        $fieldset         = new FieldsetBuilder($fieldset ?? new $this->typeMapper['fieldset']($fieldsetRenderer ?? new $this->rendererMapper['fieldset']));
        $this->registry[] = &$fieldset;

        return $fieldset;

        return new FieldsetBuilder($fieldset);
    }
}
