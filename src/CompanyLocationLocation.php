<?php

namespace Webtize\MachShipSDK;

class CompanyLocationLocation
{
    public $id;
    public $postcode;
    public $state;
    public $timeZone;
    public $suburb;
    public $subLocality;
    public $country;
    public $locationType;

    public function __construct()
    {
        $this->id = 0;
        $this->postcode = '';
        $this->state = new CompanyLocationState();
        $this->timeZone = '';
        $this->suburb = '';
        $this->subLocality = '';
        $this->country = new CompanyLocationCountry();
        $this->locationType = 0;
    }
}