<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Elements;

use Alpipego\AWP\Forms\Renderers\AbstractRenderer;

class Element implements ElementInterface
{
    use SetterTrait;

    protected $classes;
    protected $name;
    protected $id;
    protected $renderer;

//    const KEEP_ATTRIBUTES = [];

    public function __construct(AbstractRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    public function renderer(): AbstractRenderer
    {
        return $this->renderer;
    }

    public function setName(string $name): ElementInterface
    {
        return $this->simpleSetter(__FUNCTION__, $name);
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setId(string $id): ElementInterface
    {
        return $this->simpleSetter(__FUNCTION__, $id);
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function addClass(string $class): ClassesInterface
    {
        $this->classes[] = $class;
        $this->classes   = array_filter(array_unique($this->classes));

        return $this;
    }

    public function addClasses(array $classes): ClassesInterface
    {
        $this->classes = array_filter(array_unique(array_merge((array)$this->classes, $classes)));
        if (empty($this->classes)) {
            unset($this->classes);
        }

        return $this;
    }

    public function getClasses(): ?array
    {
        return $this->classes;
    }

    public function __get(string $name)
    {
        return $this->$name;
    }
}
