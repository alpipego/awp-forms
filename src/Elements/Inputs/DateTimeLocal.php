<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

class DateTimeLocal extends Date
{
    const REGEX = '/^[0-9]{4}-(?:0[1-9]|1[012])-(?:0[1-9]|[12][0-9]|3[01])T(?:[01][0-9]|2[0-3]):[0-5][0-9]$/';
}
