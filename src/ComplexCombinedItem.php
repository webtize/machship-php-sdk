<?php

namespace Webtize\MachShipSDK;

class ComplexCombinedItem
{
    public $totalHeight;
    public $totalLength;
    public $totalWidth;
    public $totalWeight;
    public $heaviestIndividualItem;
    public $numberOfPieces;

    public function __construct()
    {
        $this->totalHeight = 0;
        $this->totalLength = 0;
        $this->totalWidth = 0;
        $this->totalWeight = 0;
        $this->heaviestIndividualItem = 0;
        $this->numberOfPieces = 0;
    }
}