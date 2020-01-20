<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements\Inputs;

use Alpipego\AWP\Forms\Elements\Attributes\MinMaxLengthInterface;
use Alpipego\AWP\Forms\Elements\Attributes\PlaceholderInterface;
use Alpipego\AWP\Forms\Elements\Attributes\RequiredInterface;
use Alpipego\AWP\Forms\Elements\Attributes\SizeInterface;

interface PasswordInterface extends InputInterface, MinMaxLengthInterface, PlaceholderInterface, RequiredInterface, SizeInterface
{

}
