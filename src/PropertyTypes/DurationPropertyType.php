<?php

namespace Spatie\IcalendarGenerator\PropertyTypes;

final class DurationPropertyType extends PropertyType
{
    /** @var int */
    private $minutes;

    public static function create($names, int $minutes): DurationPropertyType
    {
        return new self($names, $minutes);
    }

    /**
     * DurationPropertyType constructor.
     *
     * @param array|string $names
     * @param int $minutes
     */
    public function __construct($names, int $minutes)
    {
        parent::__construct($names);

        $this->minutes = $minutes;
    }

    public function getValue(): string
    {
        return "PT{$this->minutes}M";
    }

    public function getOriginalValue(): int
    {
        return $this->minutes;
    }
}
