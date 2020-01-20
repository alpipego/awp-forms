<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

class Submit extends Button implements SubmitInterface
{
    public function setFormaction(string $action): SubmitInterface
    {
        return $this->simpleSetter(__METHOD__, $action);
    }

    public function getFormaction(): ?string
    {
        return $this->formaction;
    }

    public function setFormenctype(string $enctype): SubmitInterface
    {
        return $this->constrictedSetter(__METHOD__, [
            'application/x-www-form-urlencoded',
            'multipart/form-data',
            'text/plain',
        ], $enctype);
    }

    public function getFormenctype(): ?string
    {
        return $this->formenctype;
    }

    public function setFormmethod(string $method): SubmitInterface
    {
        return $this->constrictedSetter(__FUNCTION__, ['post', 'get', 'dialog'], $method);
    }

    public function getFormMethod(): ?string
    {
        return $this->formmethod;
    }

    public function setFormnovalidate(bool $novalidate = true): SubmitInterface
    {
        return $this->simpleSetter(__FUNCTION__, $novalidate);
    }

    public function getFormnovalidate(): ?bool
    {
        return $this->formnovalidate;
    }

    public function setFormtarget(string $target): SubmitInterface
    {
        return $this->constrictedSetter(__FUNCTION__, ['_blank', '_self', '_parent', '_top'], $target);
    }

    public function getFormtarget(): ?string
    {
        return $this->formtarget;
    }
}
