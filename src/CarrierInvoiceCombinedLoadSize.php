<?php

namespace Webtize\MachShipSDK;
class CarrierInvoiceCombinedLoadSize
{
    /** @var float */
    public $length;

    /** @var float */
    public $height;

    /** @var float */
    public $weight;

    /** @var float */
    public $width;

    public function __construct()
    {
        $this->length = 0.0;
        $this->height = 0.0;
        $this->weight = 0.0;
        $this->width = 0.0;
    }
}