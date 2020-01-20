<?php

declare(strict_types=1);

namespace Alpipego\AWP\Forms\Builders;

use Alpipego\AWP\Forms\Elements\ElementInterface;
use Alpipego\AWP\Forms\Elements\Fieldset;
use Alpipego\AWP\Forms\Elements\Inputs\{Button,
    Checkbox,
    CheckboxRadioInterface,
    Date,
    DateTimeInterface,
    DateTimeLocal,
    Email,
    EmailInterface,
    File,
    FileInterface,
    Hidden,
    HiddenInterface,
    Image,
    ImageInterface,
    Input,
    InputInterface,
    Month,
    Number,
    NumberInterface,
    Password,
    PasswordInterface,
    Radio,
    Text,
    TextInterface,
    Time};
use Alpipego\AWP\Forms\Renderers\{AbstractRenderer, Fieldset as FieldsetRenderer, Input as InputRenderer};

class AbstractBuilder
{
    protected $registry = [];

    protected $impartedAttributes = [];

    protected $typeMapper = [
        'button'         => Button::class,
        'checkbox'       => Checkbox::class,
        'color'          => Input::class,
        'date'           => Date::class,
        'datetime-local' => DateTimeLocal::class,
        'email'          => Email::class,
        'file'           => File::class,
        'fieldset'       => Fieldset::class,
        'hidden'         => Hidden::class,
        'image'          => Image::class,
        'month'          => Month::class,
        'number'         => Number::class,
        'password'       => Password::class,
        'radio'          => Radio::class,
        'range'          => Input::class,
        'reset'          => Input::class,
        'search'         => Input::class,
        'submit'         => Input::class,
        'tel'            => Input::class,
        'text'           => Text::class,
        'time'           => Time::class,
        'url'            => Input::class,
        'week'           => Input::class,
    ];

    protected $rendererMapper = [
        'button'         => InputRenderer::class,
        'checkbox'       => InputRenderer::class,
        'color'          => InputRenderer::class,
        'date'           => InputRenderer::class,
        'datetime-local' => InputRenderer::class,
        'email'          => InputRenderer::class,
        'file'           => InputRenderer::class,
        'fieldset'       => FieldsetRenderer::class,
        'hidden'         => InputRenderer::class,
        'image'          => InputRenderer::class,
        'month'          => InputRenderer::class,
        'number'         => InputRenderer::class,
        'password'       => InputRenderer::class,
        'radio'          => InputRenderer::class,
        'range'          => InputRenderer::class,
        'reset'          => InputRenderer::class,
        'search'         => InputRenderer::class,
        'submit'         => InputRenderer::class,
        'tel'            => InputRenderer::class,
        'text'           => InputRenderer::class,
        'time'           => InputRenderer::class,
        'url'            => InputRenderer::class,
        'week'           => InputRenderer::class,
    ];
    /**
     * @var ElementInterface
     */
    protected $parent;

    protected function setParent(ElementInterface $element): ElementInterface
    {
        return $this->parent ?? ($this->parent = $element);
    }

    public function addButton(InputInterface $button = null, AbstractRenderer $buttonRenderer = null): InputInterface
    {
        return $this->addInput('button', $button, $buttonRenderer);
    }

    public function addCheckbox(
        CheckboxRadioInterface $checkbox = null,
        AbstractRenderer $checkboxRenderer = null
    ): CheckboxRadioInterface {
        return $this->addInput('checkbox', $checkbox, $checkboxRenderer);
    }

    public function addRadio(
        CheckboxRadioInterface $radio = null,
        AbstractRenderer $radioRenderer = null
    ): CheckboxRadioInterface {
        return $this->addInput('radio', $radio, $radioRenderer);
    }

    public function addColor(InputInterface $color = null, AbstractRenderer $colorRenderer = null): InputInterface
    {
        return $this->addInput('color', $color, $colorRenderer);
    }

    public function addDate(DateTimeInterface $date = null, AbstractRenderer $dateRenderer = null): DateTimeInterface
    {
        return $this->addInput('date', $date, $dateRenderer);
    }

    public function addDateTimeLocal(
        DateTimeInterface $datetimeLocal = null,
        AbstractRenderer $datetimeLocalRenderer = null
    ): DateTimeInterface {
        return $this->addInput('datetime-local', $datetimeLocal, $datetimeLocalRenderer);
    }

    public function addTime(DateTimeInterface $time = null, AbstractRenderer $timeRenderer = null): DateTimeInterface
    {
        return $this->addInput('time', $time, $timeRenderer);
    }

    public function addMonth(
        DateTimeInterface $month = null,
        AbstractRenderer $monthRenderer = null
    ): DateTimeInterface {
        return $this->addInput('month', $month, $monthRenderer);
    }

    public function addText(TextInterface $text = null, AbstractRenderer $textRenderer = null): TextInterface
    {
        return $this->addInput('text', $text, $textRenderer);
    }

    public function addEmail(EmailInterface $email = null, AbstractRenderer $emailRenderer = null): EmailInterface
    {
        return $this->addInput('email', $email, $emailRenderer);
    }

    public function addFile(FileInterface $file = null, AbstractRenderer $fileRenderer = null): FileInterface
    {
        return $this->addInput('file', $file, $fileRenderer);
    }

    public function addHidden(HiddenInterface $hidden = null, AbstractRenderer $hiddenRenderer = null): HiddenInterface
    {
        return $this->addInput('hidden', $hidden, $hiddenRenderer);
    }

    public function addImage(ImageInterface $image = null, AbstractRenderer $imageRenderer = null): ImageInterface
    {
        return $this->addInput('image', $image, $imageRenderer);
    }

    public function addNumber(NumberInterface $number = null, AbstractRenderer $numberRenderer = null): NumberInterface
    {
        return $this->addInput('number', $number, $numberRenderer);
    }

    public function addPassword(
        PasswordInterface $password = null,
        AbstractRenderer $passwordRenderer = null
    ): PasswordInterface {
        return $this->addInput('password', $password, $passwordRenderer);
    }

    public function getElement(ElementInterface $element) : ElementInterface
    {
        $index = array_search($element, $this->registry);
        if ( ! $index) {
            throw new \InvalidArgumentException(sprintf('This %s not found in %s\'s registry.', get_class($element), self::class));
        }

        return $this->registry[$index];
    }

    public function getClone(ElementInterface $element) : ElementInterface
    {
        return clone $this->getElement($element);
    }

    protected function addInput(
        string $type,
        InputInterface $input = null,
        AbstractRenderer $renderer = null
    ): InputInterface {
        if ( ! is_null($input)) {
            $this->registry[] = &$input;
            $this->setInheritedDefaults($input);

            return $input;
        }

        if ( ! is_null($renderer)) {
            $this->rendererMapper[$type] = $renderer;
        }

        return $this->getImplementation($type);
    }

    protected function getImplementation(string $type = 'text'): InputInterface
    {
        $implementationClass = $this->typeMapper[$type];
        if ( ! is_subclass_of($implementationClass, InputInterface::class)) {
            throw new \Exception(sprintf('"%s" must implement %s.', $implementationClass, InputInterface::class));
        }

        $implementation   = new $implementationClass($type, $this->getRenderer($type));
        $this->registry[] = &$implementation;
        if ($implementation instanceof InputInterface) {
            $this->setInheritedDefaults($implementation);
        }

        return $implementation;
    }

    protected function getRenderer(string $type): AbstractRenderer
    {
        $rendererClass = $this->rendererMapper[$type];
        if ( ! is_subclass_of($rendererClass, AbstractRenderer::class)) {
            throw new \Exception(sprintf('"%s" must implement %s.', $rendererClass, AbstractRenderer::class));
        }

        return new $this->rendererMapper[$type];
    }

    protected function setInheritedDefaults(InputInterface &$implementation)
    {
        foreach ($this->impartedAttributes as $attribute) {
            $setter = 'set' . ucfirst($attribute);
            $getter = 'get' . ucfirst($attribute);
            if (
                ! method_exists($implementation, $setter)
                || ! method_exists($this->parent, $setter)
                || is_null($value = $this->parent->$getter())
            ) {
                continue;
            }
            $implementation->$setter($value);
        }
    }

    public function render(): string
    {
        $this->expandChildren($this->registry);
//        echo '<code><pre>';
//            var_dump($this->registry);
//        echo '</pre></code>';
        return $this->parent->renderer()->render($this->parent, $this->registry);
    }

    public function getRegistry(): array
    {
        return $this->registry;
    }

    private function expandChildren(array &$registry)
    {
        array_walk($registry, function (&$value) {
            if (is_subclass_of($value, self::class)) {
                $value = $value->parent->renderer()->render($value->parent, $value->registry);
            }
        });
    }
}
