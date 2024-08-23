<?php

namespace Webtize\MachShipSDK;
class CompanyLocationCountry
{
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    /** @var string */
    public $code2;

    /** @var string */
    public $code3;

    /** @var string */
    public $numeric;

    /** @var float */
    public $taxPercentage;

    public function __construct()
    {
        $this->id = 0;
        $this->name = '';
        $this->code2 = '';
        $this->code3 = '';
        $this->numeric = '';
        $this->taxPercentage = 0.0;
    }
}