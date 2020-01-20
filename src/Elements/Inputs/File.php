<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\RequiredTrait;

class File extends Input implements FileInterface
{
    use RequiredTrait;

    protected $accept;
    protected $capture;

    public function setAccept(string $accept): FileInterface
    {
        return $this->simpleSetter(__FUNCTION__, $accept);
    }

    public function getAccept(): ?string
    {
        return $this->accept;
    }

    public function setCapture(string $capture): FileInterface
    {
        return $this->constrictedSetter(__FUNCTION__, ['environment', 'user'], $capture);
    }

    public function getCapture(): ?string
    {
        return $this->capture;
    }

}
