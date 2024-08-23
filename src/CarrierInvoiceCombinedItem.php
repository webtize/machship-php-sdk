<?php

namespace Webtize\MachShipSDK;
class CarrierInvoiceCombinedItem
{
    /** @var float */
    public $totalHeight;

    /** @var float */
    public $totalLength;

    /** @var float */
    public $totalWidth;

    /** @var float */
    public $totalWeight;

    /** @var float */
    public $heaviestIndividualItem;

    /** @var int */
    public $numberOfPieces;

    public function __construct()
    {
        $this->totalHeight = 0.0;
        $this->totalLength = 0.0;
        $this->totalWidth = 0.0;
        $this->totalWeight = 0.0;
        $this->heaviestIndividualItem = 0.0;
        $this->numberOfPieces = 0;
    }
}