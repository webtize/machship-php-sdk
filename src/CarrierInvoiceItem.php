<?php

namespace Webtize\MachShipSDK;

class CarrierInvoiceItem
{
    public $id;
    public $companyItemId;
    public $itemType;
    public $name;
    public $sku;
    public $quantity;
    public $palletSpaces;
    public $standardItem;
    public $combinedItem;
    public $combinedLoadSize;
    public $consignmentItemDgItems;
    public $consignmentItemReferences;
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