<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

trait FormTrait
{
    public function setForm(string $form): FormInterface
    {
        return $this->simpleSetter(__FUNCTION__, $form);
    }

    public function getForm(): ?string
    {
        return $this->form;
    }
}
