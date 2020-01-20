<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

interface ImageInterface extends SubmitInterface
{
    public function setAlt(string $alt): self;

    public function getAlt(): ?string;

    public function setSrc(string $src): self;

    public function getSrc(): ?string;

    public function setWidth(int $width): self;

    public function getWidth(): ?int;

    public function setHeight(int $height): self;

    public function getHeight(): ?int;
}
