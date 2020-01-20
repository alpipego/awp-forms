<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\{ListTrait,
    MultipleTrait,
    PatternTrait,
    PlaceholderTrait,
    RequiredTrait,
    SizeTrait};

final class Email extends Input implements EmailInterface
{
    use ListTrait;
    use MultipleTrait;
    use PatternTrait;
    use PlaceholderTrait;
    use RequiredTrait;
    use SizeTrait;

    protected $pattern = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/';
    protected $inputmode = 'email';
}
