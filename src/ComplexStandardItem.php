<?php

namespace Webtize\MachShipSDK;
class ComplexStandardItem
{
    /** @var float */
    public float $height;

    /** @var float */
    public float $weight;

    /** @var float */
    public float $length;

    /** @var float */
    public float $width;

    public function __construct()
    {
        $this->height = 0.0;
        $this->weight = 0.0;
        $this->length = 0.0;
        $this->width = 0.0;
    }
}