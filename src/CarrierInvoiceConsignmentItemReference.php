<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceConsignmentItemReference
{
    public $printed;
    public $printedDateUtc;

    public function __construct()
    {
        $this->printed = false;
        $this->printedDateUtc = '';
    }
}