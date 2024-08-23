<?php

namespace Webtize\MachShipSDK;
class CarrierInvoiceDgClass
{
    /** @var string */
    public $class;

    /** @var int */
    public $classType;

    /** @var string */
    public $division;

    /** @var string */
    public $label;

    /** @var bool */
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