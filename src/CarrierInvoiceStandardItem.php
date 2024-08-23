<?php

namespace Webtize\MachShipSDK;
class CarrierInvoiceStandardItem
{
    /** @var int */
    public $height;

    /** @var int */
    public $weight;

    /** @var int */
    public $length;

    /** @var int */
    public $width;

    public function __construct()
    {
        $this->height = 0;
        $this->weight = 0;
        $this->length = 0;
        $this->width = 0;
    }
}