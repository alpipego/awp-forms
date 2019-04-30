<?php

declare(strict_types=1);

namespace Alpipego\AWP\Login;

interface InputImageInterface extends InputSubmitInterface
{
    public function setSrc(string $src): self;

    public function getSrc(): string;

    public function setFormAction(string $action): self;

    public function getFormAction(): string;
}
