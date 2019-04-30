<?php

declare(strict_types=1);

namespace Alpipego\AWP\Login;

interface FormInterface
{
    public function setName(string $name): self;

    public function getName(): string;

    public function setId(string $id): self;

    public function getId(): string;

    public function setAction(string $action): self;

    public function getAction(): string;
}
