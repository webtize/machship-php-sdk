<?php

namespace Webtize\MachShipSDK;

class CompanyLocation
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $locationType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $abbreviation;
    /**
     * @var string
     */
    public $contact;
    /**
     * @var string
     */
    public $phone;
    /**
     * @var string
     */
    public $email;
    /**
     * @var string
     */
    public $addressLine1;
    /**
     * @var string
     */
    public $addressLine2;
    /**
     * @var int
     */
    public $companyId;
    /**
     * @var int
     */
    public $locationId;
    /**
     * @var CompanyLocationLocation
     */
    public $location;
    /**
     * @var string
     */
    public $specialInstructions;
    /**
     * @var string
     */
    public $reference1;
    /**
     * @var string
     */
    public $reference2;
    /**
     * @var CompanyLocationTime
     */
    public $defaultPickupTime;
    /**
     * @var CompanyLocationTime
     */
    public  $defaultClosingTime;
    /**
     * @var string
     */
    public $defaultPickupInstructions;
    /**
     * @var false
     */
    public $isInternational;
    /**
     * @var string
     */
    public $internationalCity;
    /**
     * @var string
     */
    public $internationalPostcode;
    /**
     * @var string
     */
    public $internationalProvince;
    /**
     * @var int
     */
    public $internationalCountryId;
    /**
     * @var CompanyLocationCountry
     */
    public  $internationalCountry;

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