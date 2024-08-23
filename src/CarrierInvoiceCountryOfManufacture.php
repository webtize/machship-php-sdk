<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceCountryOfManufacture
{
    public $id;
    public $name;
    public $code2;
    public $code3;
    public $numeric;
    public $taxPercentage;

    public function __construct()
    {
        $this->id = 0;
        $this->name = '';
        $this->code2 = '';
        $this->code3 = '';
        $this->numeric = '';
        $this->taxPercentage = 0;
    }
}