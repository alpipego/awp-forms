<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{ListTrait,
    MinMaxLengthTrait,
    PatternTrait,
    PlaceholderTrait,
    RequiredTrait,
    SizeTrait};

class Text extends Input implements TextInterface
{
    use MinMaxLengthTrait;
    use PatternTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use ListTrait;
    use SizeTrait;
}
