<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

use Alpipego\AWP\Forms\Renderers\AbstractRenderer;

/**
 * Interface ElementInterface
 * @package Alpipego\AWP\Forms\Elements
 *
 * @method self addClass(string $class) : ClassesInterface
 * @method self addClasses(array $classes) : ClassesInterface
 */
interface ElementInterface extends ClassesInterface
{
    public function setName(string $name): self;

    public function getName(): ?string;

    public function setId(string $id): self;

    public function getId(): ?string;

    public function renderer() : AbstractRenderer;
}
