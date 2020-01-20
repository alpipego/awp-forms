<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

interface SubmitInterface extends InputInterface
{
    public function setFormaction(string $action): self;

    public function getFormaction(): ?string;

    public function setFormenctype(string $enctype): self;

    public function getFormenctype(): ?string;

    public function setFormmethod(string $method): self;

    public function getFormmethod(): ?string;

    public function setFormnovalidate(bool $novalidate = true): self;

    public function getFormnovalidate(): ?bool;

    public function setFormtarget(string $target): self;

    public function getFormtarget(): ?string;
}
