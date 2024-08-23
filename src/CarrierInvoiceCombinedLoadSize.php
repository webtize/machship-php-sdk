<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceCombinedLoadSize
{
    public $length;
    public $height;
    public $weight;
    public $width;

    public function __construct()
    {
        $this->length = 0;
        $this->height = 0;
        $this->weight = 0;
        $this->width = 0;
    }
}