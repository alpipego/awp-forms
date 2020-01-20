<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Renderers;

use Alpipego\AWP\Forms\Elements\ElementInterface;
use Alpipego\AWP\Forms\Elements\Inputs\InputInterface;

class Input extends AbstractRenderer
{
    const TEMPLATE = '<input %s>';

    /**
     * @param InputInterface $input
     * @param array|null $children
     *
     * @return string
     */
    public function render(ElementInterface $input, array $children = null): string
    {
        $this->checkType($input, InputInterface::class);

        return sprintf(self::TEMPLATE, Attributes::render($input));
    }
}
