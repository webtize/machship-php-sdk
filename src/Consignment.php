<?php

namespace Webtize\MachShipSDK;
class Consignment
{
    /** @var int */
    public $companyId;

    /** @var string */
    public $despatchDateTimeUtc;

    /** @var string */
    public $despatchDateTimeLocal;

    /** @var string */
    public $customerReference;

    /** @var string */
    public $customerReference2;

    /** @var int */
    public $carrierId;

    /** @var int */
    public $carrierServiceId;

    /** @var int */
    public $subServiceId;

    /** @var int */
    public $carrierAccountId;

    /** @var int */
    public $companyCarrierAccountId;

    /** @var int */
    public $defaultRouteSelection;

    /** @var int */
    public $fromCompanyLocationId;

    /** @var string */
    public $fromName;

    /** @var string */
    public $fromAbbreviation;

    /** @var string */
    public $fromContact;

    /** @var string */
    public $fromPhone;

    /** @var string */
    public $fromEmail;

    /** @var string */
    public $fromAddressLine1;

    /** @var string */
    public $fromAddressLine2;

    /** @var int */
    public $fromLocationId;

    /** @var ConsignmentLocation */
    public $fromLocation;

    /** @var int */
    public $toCompanyLocationId;

    /** @var string */
    public $toName;

    /** @var string */
    public $toAbbreviation;

    /** @var string */
    public $toContact;

    /** @var string */
    public $toPhone;

    /** @var string */
    public $toEmail;

    /** @var string */
    public $toAddressLine1;

    /** @var string */
    public $toAddressLine2;

    /** @var int */
    public $toLocationId;

    /** @var ConsignmentLocation */
    public $toLocation;

    /** @var string */
    public $specialInstructions;

    /** @var array */
    public $questionIds;

    /** @var string */
    public $receiverAccountCode;

    /** @var int */
    public $receiverAccountId;

    /** @var string */
    public $staffMemberName;

    /** @var int */
    public $previousConsignmentId;

    /** @var int */
    public $parentConsignmentId;

    /** @var array */
    public $electiveSurchargeIds;

    /** @var string */
    public $consignmentOptions;

    /** @var bool */
    public $sendingTrackingEmail;

    /** @var ConsignmentCustomValue[] */
    public $customValues;

    /** @var array */
    public $linkedPendingConsignmentIds;

    /** @var bool */
    public $dgsDeclaration;

    /** @var string */
    public $printerToken;

    /** @var ConsignmentItem[] */
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