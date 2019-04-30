<?php

declare(strict_types=1);

namespace Alpipego\AWP\Login;

interface InputSubmitInterface extends InputInterface
{
    public function setFormAction(string $action): self;

    public function getFormAction(): string;

    public function setFormEnctype(string $enctype): self;

    public function getFormEnctype(): string;

    public function setFormMethod(string $method): self;

    public function getFormMethod(): string;

    public function setFormNovalidate(bool $novalidate): self;

    public function getFormNovalidate(): bool;

    public function setFormTarget(string $target): self;

    public function getFormTarget(): string;
}
