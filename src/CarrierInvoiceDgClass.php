<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceDgClass
{
    public $class;
    public $classType;
    public $division;
    public $label;
    public $subRisk;

    public function __construct()
    {
        $this->class = '';
        $this->classType = 0;
        $this->division = '';
        $this->label = '';
        $this->subRisk = false;
    }
}