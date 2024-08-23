<?php

namespace Webtize\MachShipSDK;

class ConsignmentLocation
{
    public $suburb;
    public $postcode;

    public function __construct()
    {
        $this->suburb = '';
        $this->postcode = '';
    }
}