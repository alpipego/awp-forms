<?php

declare(strict_types=1);

namespace Alpipego\AWP\Login;

interface InputInterface
{
    public function setAutocomplete(bool $autocomplete): self;

    public function getAutocomplete(): bool;

    public function setAutofocus(bool $autofocus): self;

    public function getAutofocus(): bool;

    public function setDisabled(bool $disabled = false): self;

    public function getDisabled(): bool;

    public function setForm(string $form) : self;

    public function getForm() : string;

    public function setList(string $list) : self;

    public function getList() : string;

    public function setName(string $name): self;

    public function getName(): string;

    public function setReadOnly(bool $readonly = false): self;

    public function getReadOnly(): bool;

    public function setRequired(bool $required = true): self;

    public function getRequired(): bool;

    public function setTabindex(int $tabindex): self;

    public function getTabindex(): int;

    public function setType(string $type): self;

    public function getType(): string;

    public function setId(string $id): self;

    public function getId(): string;

    public function setPlaceholder(string $placeholder): self;

    public function getPlaceholder(): string;

    public function setLabel(string $label): self;

    public function getLabel(): string;

    public function setValue($value): self;

    public function getValue();

    public function addClass(string $class): self;

    public function addClasses(array $classes): self;

    public function getClasses(): array;

    public function setMaxLength(int $maxLength): self;

    public function getMaxLength(): int;

    public function setMinLength(int $minLength): self;

    public function getMinLength(): int;

    public function setPattern(string $pattern): self;

    public function getPattern(): string;
}
