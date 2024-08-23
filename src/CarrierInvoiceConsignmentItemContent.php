<?php

namespace Webtize\MachShipSDK;
class CarrierInvoiceConsignmentItemContent
{
    /** @var string */
    public $description;

    /** @var string */
    public $reference1;

    /** @var string */
    public $reference2;

    /** @var string */
    public $reference3;

    /** @var int */
    public $quantity;

    /** @var float */
    public $dollarValue;

    /** @var string */
    public $ciMarksAndNumbers;

    /** @var string */
    public $harmonizedCode;

    /** @var string */
    public $partNumber;

    /** @var string */
    public $purpose;

    /** @var int */
    public $countryOfManufactureId;

    /** @var string */
    public $countryOfManufactureCode;

    /** @var CarrierInvoiceCountryOfManufacture */
    public $countryOfManufacture;

    public function __construct()
    {
        $this->description = '';
        $this->reference1 = '';
        $this->reference2 = '';
        $this->reference3 = '';
        $this->quantity = 0;
        $this->dollarValue = 0.0;
        $this->ciMarksAndNumbers = '';
        $this->harmonizedCode = '';
        $this->partNumber = '';
        $this->purpose = '';
        $this->countryOfManufactureId = 0;
        $this->countryOfManufactureCode = '';
        $this->countryOfManufacture = new CarrierInvoiceCountryOfManufacture();
    }
}