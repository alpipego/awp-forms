<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{CheckedTrait, RequiredTrait};

class Checkbox extends Input implements CheckboxRadioInterface
{
    use RequiredTrait;
    use CheckedTrait;
}
