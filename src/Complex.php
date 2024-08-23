<?php

namespace Webtize\MachShipSDK;
class Complex
{
    /** @var int */
    public int $id;

    /** @var int */
    public int $itemType;

    /** @var string */
    public string $name;

    /** @var string */
    public string $sku;

    /** @var int */
    public int $quantity;

    /** @var ComplexStandardItem */
    public ComplexStandardItem $standardItem;

    /** @var ComplexCombinedItem */
    public ComplexCombinedItem $combinedItem;

    /** @var ComplexCombinedLoadSize */
    public ComplexCombinedLoadSize $combinedLoadSize;

    /** @var bool */
    public bool $veryFrequentItem;

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