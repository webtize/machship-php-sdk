<?php

namespace Webtize\MachShipSDK;
class CarrierInvoiceUnNumberInfo
{
    /** @var int */
    public $unNumber;

    /** @var string */
    public $name;

    /** @var string */
    public $packingGroupName;

    /** @var int */
    public $packingGroup;

    /** @var array */
    public $classes;

    /** @var bool */
    public $requiresTechnicalName;

    /** @var CarrierInvoiceDgClass */
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