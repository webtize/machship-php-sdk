<?php

namespace Webtize\MachShipSDK;

class Manifest
{
    /** @var int[] */
    public array $consignmentIds;

    /** @var int */
    public int $companyId;

    /** @var string */
    public string $pickupDateTime;

    /** @var int */
    public int $palletSpaces;

    /** @var string */
    public string $pickupClosingTime;

    /** @var string */
    public string $pickupSpecialInstructions;

    /** @var bool */
    public bool $pickupAlreadyBooked;

    /** @var string */
    public string $carrierName;

    /** @var bool */
    public bool $dgsDeclaration;

    /** @var ManifestCustomValue[] */
    public array $customValues;

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