<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceConsignmentItemReference
{
    /**
     * @var false
     */
    public $printed;
    /**
     * @var string
     */
    public $printedDateUtc;

    public function __construct()
    {
        $this->printed = false;
        $this->printedDateUtc = '';
    }
}