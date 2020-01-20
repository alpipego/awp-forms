<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{ListTrait, RequiredTrait};
use Alpipego\AWP\Forms\Exceptions\AttributeException;

class Date extends Input implements DateTimeInterface
{
    use RequiredTrait;
    use ListTrait;

    const REGEX = '/^[0-9]{4}-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|3[01])$/';

    protected $inputmode = 'numeric';

    public function setMax(string $maxdate): DateTimeInterface
    {
        $this->checkMinMax($this->min, $maxdate);

        return $this->regexSetter(__FUNCTION__, static::REGEX, $maxdate);
    }

    public function getMax(): ?string
    {
        return $this->max;
    }

    public function setMin(string $mindate): DateTimeInterface
    {
        $this->checkMinMax($mindate, $this->max);

        return $this->regexSetter(__FUNCTION__, static::REGEX, $mindate);
    }

    public function getMin(): ?string
    {
        return $this->min;
    }

    public function setStep(int $step): DateTimeInterface
    {
        return $this->simpleSetter(__FUNCTION__, $step);
    }

    public function getStep(): ?int
    {
        return $this->step;
    }

    protected function checkMinMax(string $min = null, string $max = null)
    {
        if (is_null($min) || is_null($max)) {
            return;
        }

        if (strtotime($min) > strtotime($max)) {
            throw new AttributeException(sprintf('Min date (%s) cannot be after max date (%s)', $min, $max));
        }
    }
}
