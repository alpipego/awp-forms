<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

class Time extends Date
{
    const REGEX = '/^(?:[01][0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?$/';
}
