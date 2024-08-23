<?php

namespace Webtize\MachShipSDK;

class ManifestCustomValue
{
    public $propertyName;
    public $value;

    public function __construct()
    {
        $this->propertyName = '';
        $this->value = '';
    }
}