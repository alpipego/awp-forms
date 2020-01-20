<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\PatternInterface;
use Alpipego\AWP\Forms\Elements\Attributes\PlaceholderInterface;
use Alpipego\AWP\Forms\Elements\Attributes\RequiredInterface;

interface NumberInterface extends InputInterface, RequiredInterface, PatternInterface, PlaceholderInterface
{
    public function setMin(float $min): self;

    public function getMin(): ?float;

    public function setMax(float $max): self;

    public function getMax(): ?float;

    public function setStep(float $step): self;

    public function getStep(): ?float;
}
