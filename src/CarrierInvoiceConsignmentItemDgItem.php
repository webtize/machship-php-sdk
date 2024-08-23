<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceConsignmentItemDgItem
{
    public $companyDgItemId;
    public $unNumber;
    public $packingGroup;
    public $containerType;
    public $aggregateQuantity;
    public $isAggregateQuantityWeight;
    public $numberOfContainers;
    public $isMarinePollutant;
    public $isTemperatureControlled;
    public $isEmptyDgContainer;
    public $technicalOrChemicalGroupNames;
    public $dgClassType;
    public $subDgClassTypes;
    public $properShippingName;
    public $unNumberInfo;

    public function __construct()
    {
        $this->companyDgItemId = 0;
        $this->unNumber = 0;
        $this->packingGroup = 0;
        $this->containerType = 0;
        $this->aggregateQuantity = 0;
        $this->isAggregateQuantityWeight = false;
        $this->numberOfContainers = 0;
        $this->isMarinePollutant = false;
        $this->isTemperatureControlled = false;
        $this->isEmptyDgContainer = false;
        $this->technicalOrChemicalGroupNames = '';
        $this->dgClassType = 0;
        $this->subDgClassTypes = [];
        $this->properShippingName = '';
        $this->unNumberInfo = new CarrierInvoiceUnNumberInfo();
    }
}