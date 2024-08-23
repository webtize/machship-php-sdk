<?php

namespace Webtize\MachShipSDK;
class ComplexCombinedItem
{
    /** @var float */
    public float $totalHeight;

    /** @var float */
    public float $totalLength;

    /** @var float */
    public float $totalWidth;

    /** @var float */
    public float $totalWeight;

    /** @var float */
    public float $heaviestIndividualItem;

    /** @var int */
    public int $numberOfPieces;

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