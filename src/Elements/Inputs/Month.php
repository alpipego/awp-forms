<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

class Month extends Date
{
    const REGEX = '/^[0-9]{4}-(?:0[1-9]|1[012])$/';
}
