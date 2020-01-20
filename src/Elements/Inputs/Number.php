<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\PatternTrait;
use Alpipego\AWP\Forms\Elements\Attributes\PlaceholderTrait;
use Alpipego\AWP\Forms\Elements\Attributes\RequiredTrait;
use Alpipego\AWP\Forms\Exceptions\AttributeException;

class Number extends Input implements NumberInterface
{
    use PlaceholderTrait;
    use RequiredTrait;
    use PatternTrait;

    const KEEP_ATTRIBUTES = ['min', 'max'];

    protected $inputmode = 'decimal';

    public function setMax(float $max): NumberInterface
    {
        $this->checkMinMax($this->min, $max);

        return $this->simpleSetter(__FUNCTION__, $max);
    }

    public function getMax(): ?float
    {
        return $this->max;
    }

    public function setMin(float $min): NumberInterface
    {
        $this->checkMinMax($min, $this->max);

        return $this->simpleSetter(__FUNCTION__, $min);
    }

    public function getMin(): ?float
    {
        return $this->min;
    }

    public function setStep(float $step): NumberInterface
    {
        return $this->simpleSetter(__FUNCTION__, $step);
    }

    public function getStep(): ?float
    {
        return $this->step;
    }

    protected function checkMinMax(float $min = null, float $max = null)
    {
        if (is_null($min) || is_null($max)) {
            return;
        }

        if ($min > $max) {
            throw new AttributeException(sprintf('Min (%s) cannot be larger than max (%s)', $min, $max));
        }
    }
}
