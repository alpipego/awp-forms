<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

class Form extends Element implements FormInterface
{
    use SetterTrait;

    protected $action;
    protected $method;
    protected $autocomplete;
    protected $enctype;
    protected $novalidate;
    protected $target;
    protected $wrapper;

    public function setAction(string $action): FormInterface
    {
        return $this->simpleSetter(__FUNCTION__, $action);
    }

    public function getAction(): ?string
    {
        return $this->action;
    }

    public function setMethod(string $method): FormInterface
    {
        return $this->constrictedSetter(__FUNCTION__, ['post', 'get', 'dialog'], $method);
    }

    public function getMethod(): ?string
    {
        return $this->method;
    }

    public function setAutocomplete(string $autocomplete): FormInterface
    {
        return $this->constrictedSetter(__FUNCTION__, ['on', 'off'],$autocomplete);
    }

    public function getAutocomplete(): ?string
    {
        return $this->autocomplete;
    }

    public function setEnctype(string $enctype): FormInterface
    {
        return $this->constrictedSetter(__METHOD__, [
            'application/x-www-form-urlencoded',
            'multipart/form-data',
            'text/plain',
        ], $enctype);
    }

    public function getEnctype(): ?string
    {
        return $this->enctype;
    }

    public function setNovalidate(bool $novalidate): FormInterface
    {
        return $this->simpleSetter(__FUNCTION__, $novalidate);
    }

    public function getNovalidate(): ?bool
    {
        return $this->novalidate;
    }

    public function setTarget(string $target): FormInterface
    {
        return $this->constrictedSetter(__FUNCTION__, ['_blank', '_self', '_parent', '_top'], $target);
    }

    public function getTarget(): ?string
    {
        return $this->target;
    }

    public function wrapElements(string $wrapper): FormInterface
    {
        $this->wrapper = $wrapper;

        return $this;
    }
}
