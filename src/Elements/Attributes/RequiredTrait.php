<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Attributes;

use Alpipego\AWP\Forms\Exceptions\AttributeException;

trait RequiredTrait
{
    public function setRequired(bool $required = true): RequiredInterface
    {
        if ($this->readonly) {
            throw new AttributeException('Because a read-only field cannot have a value, the required attribute is not permitted on inputs with the readonly attirbute specified.');
        }

        return $this->simpleSetter(__FUNCTION__, $required);
    }

    public function getRequired(): ?bool
    {
        return $this->required;
    }
}
