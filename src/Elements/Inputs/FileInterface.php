<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\RequiredInterface;

interface FileInterface extends InputInterface, RequiredInterface
{
    public function setAccept(string $accept): self;

    public function getAccept(): ?string;

    public function setCapture(string $capture): self;

    public function getCapture(): ?string;
}
