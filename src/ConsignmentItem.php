<?php

namespace Webtize\MachShipSDK;

class ConsignmentItem
{
    /** @var int */
    public int $companyItemId;

    /** @var int */
    public int $itemType;

    /** @var string */
    public string $name;

    /** @var string */
    public string $sku;

    /** @var int */
    public int $quantity;

    /** @var float */
    public float $height;

    /** @var float */
    public float $weight;

    /** @var float */
    public float $length;

    /** @var float */
    public float $width;

    /** @var float */
    public float $palletSpaces;

    public function __construct()
    {
        $this->companyItemId = 0;
        $this->itemType = 0;
        $this->name = '';
        $this->sku = '';
        $this->quantity = 0;
        $this->height = 0.0;
        $this->weight = 0.0;
        $this->length = 0.0;
        $this->width = 0.0;
        $this->palletSpaces = 0.0;
    }
}