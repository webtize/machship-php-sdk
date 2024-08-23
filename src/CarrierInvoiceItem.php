<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceItem
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var int
     */
    public $companyItemId;
    /**
     * @var int
     */
    public $itemType;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $sku;
    /**
     * @var int
     */
    public $quantity;
    /**
     * @var int
     */
    public $palletSpaces;
    /**
     * @var CarrierInvoiceStandardItem
     */
    public $standardItem;
    /**
     * @var CarrierInvoiceCombinedItem
     */
    public $combinedItem;
    /**
     * @var CarrierInvoiceCombinedLoadSize
     */
    public $combinedLoadSize;

    /**
     * @var CarrierInvoiceConsignmentItemDgItem[]
     */
    public $consignmentItemDgItems;
    /**
     * @var CarrierInvoiceConsignmentItemReference[]
     */
    public $consignmentItemReferences;
    /**
     * @var CarrierInvoiceConsignmentItemContent[]
     */
    public $consignmentItemContents;

    public function __construct()
    {
        $this->id = 0;
        $this->companyItemId = 0;
        $this->itemType = 0;
        $this->name = '';
        $this->sku = '';
        $this->quantity = 0;
        $this->palletSpaces = 0;
        $this->standardItem = new CarrierInvoiceStandardItem();
        $this->combinedItem = new CarrierInvoiceCombinedItem();
        $this->combinedLoadSize = new CarrierInvoiceCombinedLoadSize();
        $this->consignmentItemDgItems = [new CarrierInvoiceConsignmentItemDgItem()];
        $this->consignmentItemReferences = [new CarrierInvoiceConsignmentItemReference()];
        $this->consignmentItemContents = [new CarrierInvoiceConsignmentItemContent()];
    }
}