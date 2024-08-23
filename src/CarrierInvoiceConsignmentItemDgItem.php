<?php

namespace Webtize\MachShipSDK;
class CarrierInvoiceConsignmentItemDgItem
{
    /** @var int */
    public $companyDgItemId;

    /** @var int */
    public $unNumber;

    /** @var int */
    public $packingGroup;

    /** @var int */
    public $containerType;

    /** @var float */
    public $aggregateQuantity;

    /** @var bool */
    public $isAggregateQuantityWeight;

    /** @var int */
    public $numberOfContainers;

    /** @var bool */
    public $isMarinePollutant;

    /** @var bool */
    public $isTemperatureControlled;

    /** @var bool */
    public $isEmptyDgContainer;

    /** @var string */
    public $technicalOrChemicalGroupNames;

    /** @var int */
    public $dgClassType;

    /** @var array */
    public $subDgClassTypes;

    /** @var string */
    public $properShippingName;

    /** @var CarrierInvoiceUnNumberInfo */
    public $unNumberInfo;

    public function __construct()
    {
        $this->companyDgItemId = 0;
        $this->unNumber = 0;
        $this->packingGroup = 0;
        $this->containerType = 0;
        $this->aggregateQuantity = 0.0;
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