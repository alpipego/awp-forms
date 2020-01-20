<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

interface FormInterface
{
    public function setForm(string $form): FormInterface;

    public function getForm(): ?string;
}
