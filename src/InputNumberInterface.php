<?php

declare(strict_types=1);

namespace Alpipego\AWP\Login;

interface InputNumberInterface extends InputInterface
{
    public function setMin(float $min): self;

    public function getMin(): float;

    public function setMax(float $max): self;

    public function getMax(): float;

    public function setStep(float $step): self;

    public function getStep(): float;

}
