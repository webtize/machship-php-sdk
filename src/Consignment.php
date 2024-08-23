<?php

namespace Webtize\MachShipSDK;

class Consignment
{
    public $companyId;
    public $despatchDateTimeUtc;
    public $despatchDateTimeLocal;
    public $customerReference;
    public $customerReference2;
    public $carrierId;
    public $carrierServiceId;
    public $subServiceId;
    public $carrierAccountId;
    public $companyCarrierAccountId;
    public $defaultRouteSelection;
    public $fromCompanyLocationId;
    public $fromName;
    public $fromAbbreviation;
    public $fromContact;
    public $fromPhone;
    public $fromEmail;
    public $fromAddressLine1;
    public $fromAddressLine2;
    public $fromLocationId;
    public $fromLocation;
    public $toCompanyLocationId;
    public $toName;
    public $toAbbreviation;
    public $toContact;
    public $toPhone;
    public $toEmail;
    public $toAddressLine1;
    public $toAddressLine2;
    public $toLocationId;
    public $toLocation;
    public $specialInstructions;
    public $questionIds;
    public $receiverAccountCode;
    public $receiverAccountId;
    public $staffMemberName;
    public $previousConsignmentId;
    public $parentConsignmentId;
    public $electiveSurchargeIds;
    public $consignmentOptions;
    public $sendingTrackingEmail;
    public $customValues;
    public $linkedPendingConsignmentIds;
    public $dgsDeclaration;
    public $printerToken;
    public $items;

    public function __construct()
    {
        $this->companyId = 0;
        $this->despatchDateTimeUtc = '';
        $this->despatchDateTimeLocal = '';
        $this->customerReference = '';
        $this->customerReference2 = '';
        $this->carrierId = 0;
        $this->carrierServiceId = 0;
        $this->subServiceId = 0;
        $this->carrierAccountId = 0;
        $this->companyCarrierAccountId = 0;
        $this->defaultRouteSelection = 0;
        $this->fromCompanyLocationId = 0;
        $this->fromName = '';
        $this->fromAbbreviation = '';
        $this->fromContact = '';
        $this->fromPhone = '';
        $this->fromEmail = '';
        $this->fromAddressLine1 = '';
        $this->fromAddressLine2 = '';
        $this->fromLocationId = 0;
        $this->fromLocation = new ConsignmentLocation();
        $this->toCompanyLocationId = 0;
        $this->toName = '';
        $this->toAbbreviation = '';
        $this->toContact = '';
        $this->toPhone = '';
        $this->toEmail = '';
        $this->toAddressLine1 = '';
        $this->toAddressLine2 = '';
        $this->toLocationId = 0;
        $this->toLocation = new ConsignmentLocation();
        $this->specialInstructions = '';
        $this->questionIds = [];
        $this->receiverAccountCode = '';
        $this->receiverAccountId = 0;
        $this->staffMemberName = '';
        $this->previousConsignmentId = 0;
        $this->parentConsignmentId = 0;
        $this->electiveSurchargeIds = [];
        $this->consignmentOptions = '';
        $this->sendingTrackingEmail = false;
        $this->customValues = [new ConsignmentCustomValue()];
        $this->linkedPendingConsignmentIds = [];
        $this->dgsDeclaration = false;
        $this->printerToken = '';
        $this->items = [new ConsignmentItem()];
    }
}