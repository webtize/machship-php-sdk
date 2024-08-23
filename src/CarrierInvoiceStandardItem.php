<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceStandardItem
{
    public $height;
    public $weight;
    public $length;
    public $width;

    public function __construct()
    {
        $this->height = 0;
        $this->weight = 0;
        $this->length = 0;
        $this->width = 0;
    }
}