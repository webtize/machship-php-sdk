<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceUnNumberInfo
{
    public $unNumber;
    public $name;
    public $packingGroupName;
    public $packingGroup;
    public $classes;
    public $requiresTechnicalName;
    public $class;

    public function __construct()
    {
        $this->unNumber = 0;
        $this->name = '';
        $this->packingGroupName = '';
        $this->packingGroup = 0;
        $this->classes = [];
        $this->requiresTechnicalName = false;
        $this->class = new CarrierInvoiceDgClass();
    }
}