<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\ListInterface;
use Alpipego\AWP\Forms\Elements\Attributes\RequiredInterface;

interface DateTimeInterface extends InputInterface, RequiredInterface, ListInterface
{
    public function setMax(string $maxdate): self;

    public function getMax(): ?string;

    public function setMin(string $mindate): self;

    public function getMin(): ?string;

    public function setStep(int $step): self;

    public function getStep(): ?int;
}
