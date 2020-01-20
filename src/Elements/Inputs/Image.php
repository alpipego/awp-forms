<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

class Image extends Submit implements ImageInterface
{
    public function setAlt(string $alt): ImageInterface
    {
        return $this->simpleSetter(__FUNCTION__, $alt);
    }

    public function getAlt(): ?string
    {
        return $this->alt;
    }

    public function setSrc(string $src): ImageInterface
    {
        return $this->simpleSetter(__FUNCTION__, $src);
    }

    public function getSrc(): ?string
    {
        return $this->src;
    }

    public function getValue(): ?string
    {
        return null;
    }

    public function setWidth(int $width): ImageInterface
    {
        return $this->simpleSetter(__FUNCTION__, $width);
    }

    public function getWidth(): ?int
    {
        return $this->width;
    }

    public function setHeight(int $height): ImageInterface
    {
        return $this->simpleSetter(__FUNCTION__, $height);
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }
}
