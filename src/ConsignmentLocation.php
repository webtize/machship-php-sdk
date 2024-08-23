<?php

namespace Webtize\MachShipSDK;
class ConsignmentLocation
{
    /** @var string */
    public string $suburb;

    /** @var string */
    public string $postcode;

    public function __construct()
    {
        $this->suburb = '';
        $this->postcode = '';
    }
}