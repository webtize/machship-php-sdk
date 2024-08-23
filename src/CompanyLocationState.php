<?php

namespace Webtize\MachShipSDK;

class CompanyLocationState
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $name;
    /**
     * @var int
     */
    public $id;

    public function __construct()
    {
        $this->code = '';
        $this->name = '';
        $this->id = 0;
    }
}