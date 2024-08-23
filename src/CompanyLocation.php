<?php

namespace Webtize\MachShipSDK;

class CompanyLocation
{
    public $id;
    public $locationType;
    public $name;
    public $abbreviation;
    public $contact;
    public $phone;
    public $email;
    public $addressLine1;
    public $addressLine2;
    public $companyId;
    public $locationId;
    public $location;
    public $specialInstructions;
    public $reference1;
    public $reference2;
    public $defaultPickupTime;
    public $defaultClosingTime;
    public $defaultPickupInstructions;
    public $isInternational;
    public $internationalCity;
    public $internationalPostcode;
    public $internationalProvince;
    public $internationalCountryId;
    public $internationalCountry;

    public function __construct()
    {
        $this->id = 0;
        $this->locationType = 0;
        $this->name = '';
        $this->abbreviation = '';
        $this->contact = '';
        $this->phone = '';
        $this->email = '';
        $this->addressLine1 = '';
        $this->addressLine2 = '';
        $this->companyId = 0;
        $this->locationId = 0;
        $this->location = new CompanyLocationLocation();
        $this->specialInstructions = '';
        $this->reference1 = '';
        $this->reference2 = '';
        $this->defaultPickupTime = new CompanyLocationTime();
        $this->defaultClosingTime = new CompanyLocationTime();
        $this->defaultPickupInstructions = '';
        $this->isInternational = false;
        $this->internationalCity = '';
        $this->internationalPostcode = '';
        $this->internationalProvince = '';
        $this->internationalCountryId = 0;
        $this->internationalCountry = new CompanyLocationCountry();
    }
}