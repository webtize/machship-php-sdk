<?php

namespace Webtize\MachShipSDK;

class Complex
{
    public $id;
    public $itemType;
    public $name;
    public $sku;
    public $quantity;
    public $standardItem;
    public $combinedItem;
    public $combinedLoadSize;
    public $veryFrequentItem;

    public function __construct()
    {
        $this->id = 0;
        $this->itemType = 1;
        $this->name = '';
        $this->sku = '';
        $this->quantity = 0;
        $this->standardItem = new ComplexStandardItem();
        $this->combinedItem = new ComplexCombinedItem();
        $this->combinedLoadSize = new ComplexCombinedLoadSize();
        $this->veryFrequentItem = true;
    }
}