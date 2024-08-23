<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceConsignmentItemContent
{
    public $description;
    public $reference1;
    public $reference2;
    public $reference3;
    public $quantity;
    public $dollarValue;
    public $ciMarksAndNumbers;
    public $harmonizedCode;
    public $partNumber;
    public $purpose;
    public $countryOfManufactureId;
    public $countryOfManufactureCode;
    public $countryOfManufacture;

    public function __construct()
    {
        $this->description = '';
        $this->reference1 = '';
        $this->reference2 = '';
        $this->reference3 = '';
        $this->quantity = 0;
        $this->dollarValue = 0;
        $this->ciMarksAndNumbers = '';
        $this->harmonizedCode = '';
        $this->partNumber = '';
        $this->purpose = '';
        $this->countryOfManufactureId = 0;
        $this->countryOfManufactureCode = '';
        $this->countryOfManufacture = new CarrierInvoiceCountryOfManufacture();
    }
}