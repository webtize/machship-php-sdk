<?php

namespace Webtize\MachShipSDK;

class ConsignmentCustomValue
{
    /** @var string */
    public string $propertyName;

    /** @var string */
    public string $value;

    public function __construct()
    {
        $this->propertyName = '';
        $this->value = '';
    }
}