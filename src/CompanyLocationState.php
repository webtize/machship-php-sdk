<?php

namespace Webtize\MachShipSDK;

class CompanyLocationState
{
    public $code;
    public $name;
    public $id;

    public function __construct()
    {
        $this->code = '';
        $this->name = '';
        $this->id = 0;
    }
}