<?php

namespace Webtize\MachShipSDK;

class Manifest
{
    public $consignmentIds;
    public $companyId;
    public $pickupDateTime;
    public $palletSpaces;
    public $pickupClosingTime;
    public $pickupSpecialInstructions;
    public $pickupAlreadyBooked;
    public $carrierName;
    public $dgsDeclaration;
    public $customValues;

    public function __construct()
    {
        $this->consignmentIds = [0];
        $this->companyId = 0;
        $this->pickupDateTime = '';
        $this->palletSpaces = 0;
        $this->pickupClosingTime = '';
        $this->pickupSpecialInstructions = '';
        $this->pickupAlreadyBooked = false;
        $this->carrierName = '';
        $this->dgsDeclaration = false;
        $this->customValues = [new ManifestCustomValue()];
    }
}