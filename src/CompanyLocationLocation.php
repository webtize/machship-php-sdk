<?php

namespace Webtize\MachShipSDK;
class CompanyLocationLocation
{
    /** @var int */
    public int $id;

    /** @var string */
    public string $postcode;

    /** @var CompanyLocationState */
    public CompanyLocationState $state;

    /** @var string */
    public string $timeZone;

    /** @var string */
    public string $suburb;

    /** @var string */
    public string $subLocality;

    /** @var CompanyLocationCountry */
    public CompanyLocationCountry $country;

    /** @var int */
    public int $locationType;

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