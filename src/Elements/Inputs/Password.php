<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{ListTrait,
    MinMaxLengthTrait,
    PatternTrait,
    PlaceholderTrait,
    RequiredTrait,
    SizeTrait};

class Password extends Input implements PasswordInterface
{
    use ListTrait;
    use PatternTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use SizeTrait;
    use MinMaxLengthTrait;
}
