<?php

namespace Webtize\MachShipSDK;

class ConsignmentItem
{
    public $companyItemId;
    public $itemType;
    public $name;
    public $sku;
    public $quantity;
    public $height;
    public $weight;
    public $length;
    public $width;
    public $palletSpaces;

    public function __construct()
    {
        $this->companyItemId = 0;
        $this->itemType = 0;
        $this->name = '';
        $this->sku = '';
        $this->quantity = 0;
        $this->height = 0;
        $this->weight = 0;
        $this->length = 0;
        $this->width = 0;
        $this->palletSpaces = 0;
    }
}