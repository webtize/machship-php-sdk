<?php

namespace Webtize\MachShipSDK;

use GuzzleHttp\Client;
use InvalidArgumentException;

class MacShipAPI
{
    public static function cleanObject($object)
    {
        foreach ($object as $property => $value) {
            if (is_object($value)) {
                self::cleanObject($value); // Recursive call for sub-objects
            } elseif (is_array($value)) {
                self::cleanArray($value); // In case some properties are arrays
            }

            if ($value !== null && $value !== 0) {
                unset($object->$property);
            }
        }
        return $object;
    }
    public static function cleanArray(array &$data)
    {
        foreach ($data as $key => &$value) {
            if (is_array($value)) {
                self::cleanArray($value); // Recursive call for sub-arrays
            }

            if ($value !== null && $value !== 0) {
                unset($data[$key]);
            }
        }
    }

    // Base endpoint for Machship API
    private static $endPoint = 'https://live.machship.com/apiv2/';


    public static function getAllComplexItems($companyId, $startIndex = 1, $retrieveSize = 200)
    {
        // Construct the path with the company ID, start index, and retrieve size
        $path = 'items/getAllComplex?companyId=' . $companyId
            . '&startIndex=' . $startIndex
            . '&retrieveSize=' . $retrieveSize;

        return self::getCall($path);
    }

    public static function getBySkuComplex($companyId, $sku)
    {
        // Construct the path with the company ID and SKU
        $path = 'items/getBySkuComplex?companyId=' . $companyId . '&sku=' . urlencode($sku);

        return self::getCall($path);
    }


    public static function createComplex($companyId, $data = [])
    {
        // Construct the path with the company ID
        $path = 'items/createComplex?companyId=' . $companyId;

        return self::postCall($path, $data);
    }

    public static function deleteItem($companyItemId)
    {
        // Construct the path with the company item ID
        $path = 'items/delete?companyItemId=' . $companyItemId;

        return self::deleteCall($path);
    }

    public static function getCompanyLocation($id = null)
    {
        // Initialize the path for the API endpoint
        $path = 'companyLocations/get';

        // Append the query parameter only if the id is provided
        if ($id !== null) {
            $path .= '?id=' . $id;
        }

        return self::getCall($path);
    }

    public static function getUnmanifestedConsignmentForEdit($id)
    {
        $path = 'consignments/getUnmanifestedConsignmentForEdit?id=' . $id;

        return self::getCall($path);
    }

    public static function getConsignmentByPendingConsignmentId($id)
    {
        // Construct the path with the provided pending consignment ID
        $path = 'consignments/getConsignmentByPendingConsignmentId?id=' . $id;

        // Call the GET request and return the result
        return self::getCall($path);
    }

    // POST /apiv2/consignments/returnConsignmentsByPendingConsignmentIds
    public static function returnConsignmentsByPendingConsignmentIds(array $data)
    {
        $path = 'consignments/returnConsignmentsByPendingConsignmentIds';
        return self::postCall($path, $data);
    }

// POST /apiv2/consignments/returnConsignments
    public static function returnConsignments(array $data)
    {
        $path = 'consignments/returnConsignments';
        return self::postCall($path, $data);
    }

// POST /apiv2/consignments/returnConsignmentsByCarrierConsignmentId
    public static function returnConsignmentsByCarrierConsignmentId(array $data)
    {
        $path = 'consignments/returnConsignmentsByCarrierConsignmentId';
        return self::postCall($path, $data);
    }

// POST /apiv2/consignments/returnConsignmentsByReference1
    public static function returnConsignmentsByReference1(array $data)
    {
        $path = 'consignments/returnConsignmentsByReference1';
        return self::postCall($path, $data);
    }

// POST /apiv2/consignments/returnConsignmentsByReference2
    public static function returnConsignmentsByReference2(array $data)
    {
        $path = 'consignments/returnConsignmentsByReference2';
        return self::postCall($path, $data);
    }

    public static function getUnmanifested(array $data = [])
    {
        $path = 'consignments/getUnmanifested';

        // Add query parameters to the path if they exist in the $data array
        $queryParams = [];
        if (isset($data['companyId'])) {
            $queryParams['companyId'] = $data['companyId'];
        }
        if (isset($data['startIndex'])) {
            $queryParams['startIndex'] = $data['startIndex'];
        }
        if (isset($data['retrieveSize'])) {
            $queryParams['retrieveSize'] = $data['retrieveSize'];
        }
        if (isset($data['carrierId'])) {
            $queryParams['carrierId'] = $data['carrierId'];
        }
        if (isset($data['includeChildCompanies'])) {
            $queryParams['includeChildCompanies'] = $data['includeChildCompanies'];
        }

        // Append query parameters to the path
        if (!empty($queryParams)) {
            $path .= '?' . http_build_query($queryParams);
        }

        return self::getCall($path);
    }

    public static function getAll(array $data = [])
    {
        $path = 'consignments/getAll';

        // Add query parameters to the path if they exist in the $data array
        $queryParams = [];
        if (isset($data['companyId'])) {
            $queryParams['companyId'] = $data['companyId'];
        }
        if (isset($data['startIndex'])) {
            $queryParams['startIndex'] = $data['startIndex'];
        }
        if (isset($data['retrieveSize'])) {
            $queryParams['retrieveSize'] = $data['retrieveSize'];
        }
        if (isset($data['carrierId'])) {
            $queryParams['carrierId'] = $data['carrierId'];
        }
        if (isset($data['includeChildCompanies'])) {
            $queryParams['includeChildCompanies'] = $data['includeChildCompanies'];
        }
        if (isset($data['includeDeletedConsignments'])) {
            $queryParams['includeDeletedConsignments'] = $data['includeDeletedConsignments'];
        }
        if (isset($data['fromDateTimeLocal'])) {
            $queryParams['fromDateTimeLocal'] = $data['fromDateTimeLocal'];
        }
        if (isset($data['toDateTimeLocal'])) {
            $queryParams['toDateTimeLocal'] = $data['toDateTimeLocal'];
        }
        if (isset($data['filterByEtaCompletedOrDespatch'])) {
            $queryParams['filterByEtaCompletedOrDespatch'] = $data['filterByEtaCompletedOrDespatch'];
        }

        // Append query parameters to the path
        if (!empty($queryParams)) {
            $path .= '?' . http_build_query($queryParams);
        }

        return self::getCall($path);
    }

    public static function getRecentlyCreatedOrUpdatedConsignments(array $data = [])
    {
        $path = 'consignments/getRecentlyCreatedOrUpdatedConsignments';

        // Ensure 'fromDateUtc' is provided
        if (!isset($data['fromDateUtc'])) {
            throw new \InvalidArgumentException('The "fromDateUtc" parameter is required.');
        }

        // Add query parameters to the path if they exist in the $data array
        $queryParams = [
            'fromDateUtc' => $data['fromDateUtc']
        ];

        if (isset($data['companyId'])) {
            $queryParams['companyId'] = $data['companyId'];
        }
        if (isset($data['toDateUtc'])) {
            $queryParams['toDateUtc'] = $data['toDateUtc'];
        }
        if (isset($data['startIndex'])) {
            $queryParams['startIndex'] = $data['startIndex'];
        }
        if (isset($data['retrieveSize'])) {
            $queryParams['retrieveSize'] = $data['retrieveSize'];
        }
        if (isset($data['carrierId'])) {
            $queryParams['carrierId'] = $data['carrierId'];
        }
        if (isset($data['includeChildCompanies'])) {
            $queryParams['includeChildCompanies'] = $data['includeChildCompanies'];
        }
        if (isset($data['getNotes'])) {
            $queryParams['getNotes'] = $data['getNotes'];
        }
        if (isset($data['getReconciliationData'])) {
            $queryParams['getReconciliationData'] = $data['getReconciliationData'];
        }

        // Append query parameters to the path
        if (!empty($queryParams)) {
            $path .= '?' . http_build_query($queryParams);
        }

        return self::getCall($path);
    }

    public static function getCompleted(array $data = [])
    {
        $path = 'consignments/getCompleted';

        // Ensure 'startDate' and 'endDate' are provided
        if (!isset($data['startDate']) || !isset($data['endDate'])) {
            throw new \InvalidArgumentException('Both "startDate" and "endDate" parameters are required.');
        }

        // Add query parameters to the path if they exist in the $data array
        $queryParams = [
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate']
        ];

        if (isset($data['companyId'])) {
            $queryParams['companyId'] = $data['companyId'];
        }
        if (isset($data['includeChildCompanies'])) {
            $queryParams['includeChildCompanies'] = $data['includeChildCompanies'];
        }

        // Append query parameters to the path
        if (!empty($queryParams)) {
            $path .= '?' . http_build_query($queryParams);
        }

        return self::getCall($path);
    }

    public static function createConsignment(array $data = [])
    {
        return self::postCall('consignments/createConsignment', $data);
    }

    public static function createExistingConsignment(array $data = [])
    {
        return self::postCall('consignments/createExistingConsignment', $data);
    }

    public static function editUnmanifestedConsignment(array $data = [])
    {
        return self::postCall('consignments/editUnmanifestedConsignment', $data);
    }

    public static function createConsignmentwithComplexItems(array $data = [])
    {
        return self::postCall('consignments/createConsignmentwithComplexItems', $data);
    }

    public static function deleteUnmanifestedConsignments(array $data = [])
    {
        return self::postCall('consignments/deleteUnmanifestedConsignments', $data);
    }

    public static function getAttachments(array $data = [])
    {
        return self::postCall('consignments/getAttachments', $data);
    }

    public static function getConsignmentForClone($id)
    {
        // Build the request path with the provided id if it's not null
        $path = 'consignments/getConsignmentForClone';
        if ($id !== null) {
            $path .= '?id=' . urlencode($id);
        }

        // Call the getCall method with the constructed path
        return self::getCall($path);
    }

    public static function searchConsignments(array $data = [])
    {
        // Build the request path
        $path = 'consignments/searchConsignments';

        // Call the postCall method with the constructed path and data
        return self::postCall($path, $data);
    }

    public static function returnIdentityPublicKeys($data)
    {
        $url = '/apiv2/identities/returnIdentityPublicKeys';
        return self::postCall($url, $data);
    }

    public static function linkIdentitiesToCompanies($data)
    {
        $url = '/apiv2/identities/linkIdentitiesToCompanies';
        return self::postCall($url, $data);
    }

    public static function createIdentities($data)
    {
        $url = '/apiv2/identities/createIdentities';
        return self::postCall($url, $data);
    }

    public static function unlinkIdentitiesFromCompanies($data)
    {
        $url = '/apiv2/identities/unlinkIdentitiesFromCompanies';
        return self::postCall($url, $data);
    }

    public static function disableIdentities($data)
    {
        $url = '/apiv2/identities/disableIdentities';
        return self::postCall($url, $data);
    }

    public static function reenableIdentities($data)
    {
        $url = '/apiv2/identities/reenableIdentities';
        return self::postCall($url, $data);
    }

    public static function getIdentityProvidersForCompany($companyId)
    {
        $url = '/apiv2/identityproviders/GetIdentityProvidersForCompany';
        $queryParams = ['companyId' => $companyId];
        $path = $url . '?' . http_build_query($queryParams);

        return self::getCall($path);
    }

    public static function getIdentityProviders($identityProviderId = null)
    {
        $url = '/apiv2/identityproviders';
        $queryParams = [];

        if ($identityProviderId !== null) {
            $queryParams['identityProviderId'] = $identityProviderId;
        }

        $queryString = http_build_query($queryParams);
        $path = $url . ($queryString ? '?' . $queryString : '');

        return self::getCall($path);
    }

    public static function getIdentityProvidersForOrganisation($organisationId)
    {
        $url = '/apiv2/identityproviders/GetIdentityProvidersForOrganisation';
        $queryParams = [
            'organisationId' => $organisationId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getIdentityProvidersForLoggedUser()
    {
        $url = '/apiv2/identityproviders/GetIdentityProvidersForLoggedUser';
        $queryParams = []; // No parameters required

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getManifestPdf($manifestId)
    {
        $url = '/apiv2/labels/getManifestPdf';
        $queryParams = [
            'manifestId' => $manifestId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getManifestPdfByConsignmentId($consignmentId)
    {
        $url = '/apiv2/labels/getManifestPdfByConsignmentId';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getConsignmentPdf($consignmentId)
    {
        $url = '/apiv2/labels/getConsignmentPdf';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getCommercialInvoicePdf($consignmentId)
    {
        $url = '/apiv2/labels/getCommercialInvoicePdf';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getItemPdf($consignmentId, $printA4 = false)
    {
        $url = '/apiv2/labels/getItemPdf';
        $queryParams = [
            'consignmentId' => $consignmentId,
            'printA4' => $printA4
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getItemPdfFileInfo($consignmentId, $printA4 = false)
    {
        $url = '/apiv2/labels/getItemPdfFileInfo';
        $queryParams = [
            'consignmentId' => $consignmentId,
            'printA4' => $printA4
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getSpecialInstructionsPdf($consignmentId, $printA4 = false)
    {
        $url = '/apiv2/labels/getSpecialInstructionsPdf';
        $queryParams = [
            'consignmentId' => $consignmentId,
            'printA4' => $printA4
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getDangerousGoodsDocumentPdf($consignmentId)
    {
        $url = '/apiv2/labels/getDangerousGoodsDocumentPdf';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getDangerousGoodsDocumentPdfFileInfo($consignmentId)
    {
        $url = '/apiv2/labels/getDangerousGoodsDocumentPdfFileInfo';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getMO41DocumentPdf($consignmentId)
    {
        $url = '/apiv2/labels/getMO41DocumentPdf';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getMO41DocumentPdfFileInfo($consignmentId)
    {
        $url = '/apiv2/labels/getMO41DocumentPdfFileInfo';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getManifestPdfFileInfo($manifestId)
    {
        $url = '/apiv2/labels/getManifestPdfFileInfo';
        $queryParams = [
            'manifestId' => $manifestId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getConsignmentPdfFileInfo($consignmentId)
    {
        $url = '/apiv2/labels/getConsignmentPdfFileInfo';
        $queryParams = [
            'consignmentId' => $consignmentId
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function getItemPdfsForConsignments($consignmentIds, $printA4 = false, $singlePdf = false)
    {
        $url = '/apiv2/labels/getItemPdfsForConsignments';
        $queryParams = [
            'consignmentIds' => implode(',', $consignmentIds), // Converts array to comma-separated string
            'printA4' => $printA4 ? 'true' : 'false',
            'singlePdf' => $singlePdf ? 'true' : 'false'
        ];

        $queryString = http_build_query($queryParams);
        $path = $url . '?' . $queryString;

        return self::getCall($path);
    }

    public static function returnItemPdfsForConsignments($data)
    {
        $url = '/apiv2/labels/returnItemPdfsForConsignments';
        return self::postCall($url, $data);
    }

    public static function sendLabelsToPrinter($data)
    {
        $url = '/apiv2/labels/sendLabelsToPrinter';
        return self::postCall($url, $data);
    }

    public static function groupConsignmentsForPrinting($data)
    {
        $url = '/apiv2/labels/groupConsignmentsForPrinting';
        return self::postCall($url, $data);
    }

    public static function returnLocations($data)
    {
        $url = '/apiv2/locations/returnLocations';
        return self::postCall($url, $data);
    }

    public static function returnLocationsWithSearchOptions($data)
    {
        $url = '/apiv2/locations/returnLocationsWithSearchOptions';
        return self::postCall($url, $data);
    }

    public static function groupConsignmentsForManifest($data)
    {
        $url = '/apiv2/manifests/groupConsignmentsForManifest';
        return self::postCall($url, $data);
    }

    public static function groupAllUnmanifestedConsignmentsForManifest($data)
    {
        $url = '/apiv2/manifests/groupAllUnmanifestedConsignmentsForManifest';
        return self::postCall($url, $data);
    }

    public static function manifest($data)
    {
        $url = '/apiv2/manifests/manifest';
        return self::postCall($url, $data);
    }

    public static function getAllManifests($companyId = null, $startIndex = 1, $retrieveSize = 40, $carrierId = null, $includeChildCompanies = false, $startDate = null, $endDate = null)
    {
        $url = '/apiv2/manifests/getAll?';
        $params = [];

        // Add parameters to the URL only if they are not null
        if ($companyId !== null) {
            $params['companyId'] = $companyId;
        }
        if ($startIndex !== null) {
            $params['startIndex'] = $startIndex;
        }
        if ($retrieveSize !== null) {
            $params['retrieveSize'] = $retrieveSize;
        }
        if ($carrierId !== null) {
            $params['carrierId'] = $carrierId;
        }
        if ($includeChildCompanies !== null) {
            $params['includeChildCompanies'] = $includeChildCompanies ? 'true' : 'false';
        }
        if ($startDate !== null) {
            $params['startDate'] = $startDate;
        }
        if ($endDate !== null) {
            $params['endDate'] = $endDate;
        }

        // Append parameters to the URL
        $url .= http_build_query($params);

        return self::getCall($url);
    }

    public static function getNotesForConsignment($id)
    {
        $path = '/apiv2/notes/getNotesForConsignment?id=' . $id;
        return self::getCall($path);
    }

    public static function addOrganisationLink($data)
    {
        return self::postCall('organisationLinks/add', $data);
    }

    public static function removeOrganisationLink($data)
    {
        return self::postCall('organisationLinks/remove', $data);
    }

    public static function getForOrganisation($organisationId = null)
    {
        $path = 'organisationLinks/getForOrganisation';
        if ($organisationId !== null) {
            $path .= '?id=' . $organisationId;
        }
        return self::getCall($path);
    }

    public static function getLinkedFromOrganisations($startIndex = null, $retrieveSize = null, $sort = null, $searchText = null)
    {
        $path = 'organisationLinks/getLinkedFromOrganisations';
        $params = [];

        if ($startIndex !== null) {
            $params[] = 'startIndex=' . $startIndex;
        }
        if ($retrieveSize !== null) {
            $params[] = 'retrieveSize=' . $retrieveSize;
        }
        if ($sort !== null) {
            $params[] = 'sort=' . $sort;
        }
        if ($searchText !== null) {
            $params[] = 'searchText=' . $searchText;
        }

        if (!empty($params)) {
            $path .= '?' . implode('&', $params);
        }

        return self::getCall($path);
    }

    public static function getLinkedToOrganisations($startIndex = null, $retrieveSize = null, $sort = null, $searchText = null)
    {
        $path = 'organisationLinks/getLinkedToOrganisations';
        $params = [];

        if ($startIndex !== null) {
            $params[] = 'startIndex=' . $startIndex;
        }
        if ($retrieveSize !== null) {
            $params[] = 'retrieveSize=' . $retrieveSize;
        }
        if ($sort !== null) {
            $params[] = 'sort=' . $sort;
        }
        if ($searchText !== null) {
            $params[] = 'searchText=' . $searchText;
        }

        if (!empty($params)) {
            $path .= '?' . implode('&', $params);
        }

        return self::getCall($path);
    }

    public static function getPublicKeyForOrganisation($id = null)
    {
        $path = 'organisationLinks/getPublicKeyForOrganisation';

        if ($id !== null) {
            $path .= '?id=' . $id;
        }

        return self::getCall($path);
    }

    public static function resetPublicKeyForOrganisation($id = null)
    {
        $path = 'organisationLinks/resetPublicKeyForOrganisation';

        if ($id !== null) {
            $path .= '?id=' . $id;
        }

        return self::getCall($path);
    }

    public static function getOrganisationDetailsByPublicKey($publicKey = null)
    {
        $path = 'organisationLinks/getOrganisationDetailsByPublicKey';

        if ($publicKey !== null) {
            $path .= '?publicKey=' . $publicKey;
        }

        return self::getCall($path);
    }

    public static function getPendingConsignment($id = null)
    {
        $path = 'pendingConsignments/getPendingConsignment';

        if ($id !== null) {
            $path .= '?id=' . $id;
        }

        return self::getCall($path);
    }

    public static function returnPendingConsignments($data = [])
    {
        return self::postCall('pendingConsignments/returnPendingConsignments', $data);
    }

    public static function returnPendingConsignmentsByReference1($data = [])
    {
        return self::postCall('pendingConsignments/returnPendingConsignmentsByReference1', $data);
    }

    public static function returnPendingConsignmentsByReference2($data = [])
    {
        return self::postCall('pendingConsignments/returnPendingConsignmentsByReference2', $data);
    }

    public static function createPendingConsignment($data = [])
    {
        return self::postCall('pendingConsignments/createPendingConsignment', $data);
    }

    public static function deletePendingConsignments($data = [])
    {
        return self::postCall('pendingConsignments/deletePendingConsignments', $data);
    }

    public static function getRecentlyCreatedOrUpdatedPendingConsignments($companyId = null, $fromDateUtc = null, $toDateUtc = null, $startIndex = 1, $retrieveSize = 40, $carrierId = null, $includeChildCompanies = false, $getDeleted = false)
    {
        $path = 'pendingConsignments/getRecentlyCreatedOrUpdatedPendingConsignments';
        $params = [];

        if ($companyId !== null) $params['companyId'] = $companyId;
        if ($fromDateUtc !== null) $params['fromDateUtc'] = $fromDateUtc;
        if ($toDateUtc !== null) $params['toDateUtc'] = $toDateUtc;
        if ($startIndex !== 1) $params['startIndex'] = $startIndex;
        if ($retrieveSize !== 40) $params['retrieveSize'] = $retrieveSize;
        if ($carrierId !== null) $params['carrierId'] = $carrierId;
        if ($includeChildCompanies !== false) $params['includeChildCompanies'] = $includeChildCompanies;
        if ($getDeleted !== false) $params['getDeleted'] = $getDeleted;

        $queryString = http_build_query($params);
        return self::getCall($path . '?' . $queryString);
    }

    public static function createQuote($data = [])
    {
        $path = 'quotes/createQuote';
        return self::postCall($path, $data);
    }

    public static function createQuoteWithComplexItems($data = [])
    {
        $path = 'quotes/createQuoteWithComplexItems';
        return self::postCall($path, $data);
    }

    public static function getAllQuotes($companyId = null)
    {
        $path = 'quotes/getAll';
        if ($companyId !== null) {
            $path .= '?companyId=' . $companyId;
        }
        return self::getCall($path);
    }

    public static function getQuote($id = null)
    {
        $path = 'quotes/getQuote';
        if ($id !== null) {
            $path .= '?id=' . $id;
        }
        return self::getCall($path);
    }

    public static function getAvailableRoles($companyId = null)
    {
        $path = 'identities/getAvailableRoles';
        if ($companyId !== null) {
            $path .= '?companyId=' . $companyId;
        }
        return self::getCall($path);
    }

    public static function returnRoutes($data = [])
    {
        return self::postCall('routes/returnroutes', $data);
    }

    public static function returnMultipleRoutes($data = [])
    {
        return self::postCall('routes/returnmultipleroutes', $data);
    }

    public static function returnRoutesWithComplexItems($data = [])
    {
        return self::postCall('routes/returnrouteswithcomplexitems', $data);
    }

    public static function groupConsignmentsForConsolidation(array $data = [])
    {
        // Define the request path for grouping consignments
        $path = 'consolidation/groupConsignmentsForConsolidation';

        // Call the postCall method to perform the request
        return self::postCall($path, $data);
    }

    public static function performConsolidation(array $data = [])
    {
        // Define the request path for performing consolidation
        $path = 'consolidation/performConsolidation';

        // Call the postCall method to perform the request
        return self::postCall($path, $data);
    }

    public static function groupAndPerformConsolidation(array $data = [])
    {
        // Define the request path for grouping and performing consolidation
        $path = 'consolidation/groupAndPerformConsolidation';

        // Call the postCall method to perform the request
        return self::postCall($path, $data);
    }

    public static function getAllPosted(array $data = [])
    {
        // Base URL path for the GET request
        $path = 'financialInvoice/getAllPosted';

        // Initialize an empty array for query parameters
        $queryParams = [];

        // Add optional parameters to the query array if they exist in the input data
        if (isset($data['startDate'])) {
            $queryParams['startDate'] = $data['startDate'];
        }
        if (isset($data['endDate'])) {
            $queryParams['endDate'] = $data['endDate'];
        }
        if (isset($data['startIndex'])) {
            $queryParams['startIndex'] = $data['startIndex'];
        } else {
            // Default value if not provided
            $queryParams['startIndex'] = 1;
        }
        if (isset($data['retrieveSize'])) {
            $queryParams['retrieveSize'] = $data['retrieveSize'];
        } else {
            // Default value if not provided
            $queryParams['retrieveSize'] = 100;
        }

        // Build the query string from the query parameters array
        $queryString = http_build_query($queryParams);

        // Append the query string to the URL path
        $url = $path . '?' . $queryString;

        // Call the getCall method to perform the GET request
        return self::getCall($url);
    }

    public static function getIdentities(array $data = [])
    {
        // Base URL path for the GET request
        $path = 'identities/getIdentities';

        // Initialize an empty array for query parameters
        $queryParams = [];

        // Add optional parameters to the query array if they exist in the input data
        if (isset($data['organisationId'])) {
            $queryParams['organisationId'] = $data['organisationId'];
        }

        if (isset($data['onlyUnlinkedIdentities'])) {
            $queryParams['onlyUnlinkedIdentities'] = $data['onlyUnlinkedIdentities'] ? 'true' : 'false';
        } else {
            // Default value if not provided
            $queryParams['onlyUnlinkedIdentities'] = 'false';
        }

        if (isset($data['identityProviderId'])) {
            $queryParams['identityProviderId'] = $data['identityProviderId'];
        }

        // Build the query string from the query parameters array
        $queryString = http_build_query($queryParams);

        // Append the query string to the URL path
        $url = $path . '?' . $queryString;

        // Call the getCall method to perform the GET request
        return self::getCall($url);
    }


    public static function getPostedInvoiceByDocumentNumber(array $data = [])
    {
        // Base URL path for the GET request
        $path = 'financialInvoice/getPostedInvoiceByDocumentNumber';

        // Initialize an empty array for query parameters
        $queryParams = [];

        // Add required parameter
        if (isset($data['documentNumber'])) {
            $queryParams['documentNumber'] = $data['documentNumber'];
        } else {
            throw new InvalidArgumentException('documentNumber is required.');
        }

        // Add optional parameter to the query array if it exists in the input data
        if (isset($data['returnPdfFileBytes'])) {
            $queryParams['returnPdfFileBytes'] = $data['returnPdfFileBytes'] ? 'true' : 'false';
        } else {
            // Default value if not provided
            $queryParams['returnPdfFileBytes'] = 'false';
        }

        // Build the query string from the query parameters array
        $queryString = http_build_query($queryParams);

        // Append the query string to the URL path
        $url = $path . '?' . $queryString;

        // Call the getCall method to perform the GET request
        return self::getCall($url);
    }


    public static function getActive(array $data = [])
    {
        $path = 'consignments/getActive';

        // Add query parameters to the path if they exist in the $data array
        $queryParams = [];
        if (isset($data['companyId'])) {
            $queryParams['companyId'] = $data['companyId'];
        }
        if (isset($data['startIndex'])) {
            $queryParams['startIndex'] = $data['startIndex'];
        }
        if (isset($data['retrieveSize'])) {
            $queryParams['retrieveSize'] = $data['retrieveSize'];
        }
        if (isset($data['carrierId'])) {
            $queryParams['carrierId'] = $data['carrierId'];
        }
        if (isset($data['includeChildCompanies'])) {
            $queryParams['includeChildCompanies'] = $data['includeChildCompanies'];
        }

        // Append query parameters to the path
        if (!empty($queryParams)) {
            $path .= '?' . http_build_query($queryParams);
        }

        return self::getCall($path);
    }

// POST /apiv2/consignments/returnConsignmentStatuses
    public static function returnConsignmentStatuses(array $data)
    {
        $path = 'consignments/returnConsignmentStatuses';
        return self::postCall($path, $data);
    }

// POST /apiv2/consignments/updateConsignmentStatuses
    public static function updateConsignmentStatuses(array $data)
    {
        $path = 'consignments/updateConsignmentStatuses';
        return self::postCall($path, $data);
    }

    public static function getConsignment($id, $includeDeleted = false)
    {
        $path = 'consignments/getConsignment?id=' . $id;

        // Add 'includeDeleted' parameter to the path if it is not null
        $path .= '&includeDeleted=' . $includeDeleted;

        return self::getCall($path);
    }

    public static function addPermanentPickupsToCompanyLocation(array $data)
    {
        $path = 'companyLocations/addPermanentPickupsToCompanyLocation';
        return self::postCall($path, $data);
    }

    public static function createCompanyLocation(array $data)
    {
        return self::postCall('companyLocations/create', $data);
    }

    public static function editCompanyLocation(array $data)
    {
        return self::postCall('companyLocations/edit', $data);
    }

    public static function getPermanentPickupsForCompanyLocation($companyLocationId = null)
    {
        $path = 'companyLocations/getPermanentPickupsForCompanyLocation';
        if ($companyLocationId !== null) {
            $path .= '?companyLocationId=' . $companyLocationId;
        }
        return self::getCall($path);
    }

    public static function getAllCompanyLocations($companyId = null)
    {
        // Initialize the path for the API endpoint
        $path = 'companyLocations/getAll';

        // Append the query parameter only if the companyId is provided
        if ($companyId !== null) {
            $path .= '?companyId=' . $companyId;
        }

        return self::getCall($path);
    }

    public static function getComplexItem($id)
    {
        // Construct the path with the item ID
        $path = 'items/getComplex?id=' . $id;

        return self::getCall($path);
    }

    public static function getItemBySku($sku, $companyId = null)
    {
        // Construct the path with the SKU and optionally companyId
        $path = 'items/getBySku?sku=' . $sku;

        if ($companyId !== null) {
            $path .= '&companyId=' . $companyId;
        }

        return self::getCall($path);
    }

    public static function getItem($id)
    {
        // Construct the path with the item ID
        $path = 'items/get?id=' . $id;

        return self::getCall($path);
    }

    public static function getAvailableCarriersAccountsAndServices($companyId = null)
    {
        $path = 'companies/getAvailableCarriersAccountsAndServices';

        // Add companyId to the path if provided
        if ($companyId !== null) {
            $path .= '?companyId=' . $companyId;
        }

        return self::getCall($path);
    }

    public static function attemptAutoReconciliation($data = [])
    {
        $path = 'carrierInvoices/attemptAutoReconciliation';

        return self::postCall($path, $data);
    }

    public static function updateAndRepriceConsignment($data = [])
    {
        $path = 'carrierInvoices/updateAndRepriceConsignment';
        return self::postCall($path, $data);
    }

    public static function getEntriesForInvoice($carrierInvoiceId, $status = null)
    {
        $path = 'carrierInvoices/getEntriesForInvoice';
        $queryParams = [];

        // Always add carrierInvoiceId to the query parameters
        if ($carrierInvoiceId !== null) {
            $queryParams['carrierInvoiceId'] = $carrierInvoiceId;
        }
        // Add status to the query parameters if it's not null
        if ($status !== null) {
            $queryParams['status'] = $status;
        }

        // Append query parameters to the path if any are present
        if (!empty($queryParams)) {
            $path .= '?' . http_build_query($queryParams);
        }

        return self::getCall($path);
    }

    public static function getCarrierInvoices($companyId = null, $carrierId = null, $fileName = null, $invoiceId = null)
    {
        $path = 'carrierInvoices/getAll';
        $queryParams = [];

        // Add parameters to the query string if they are not null
        if ($companyId !== null) {
            $queryParams['companyId'] = $companyId;
        }
        if ($carrierId !== null) {
            $queryParams['carrierId'] = $carrierId;
        }
        if ($fileName !== null) {
            $queryParams['fileName'] = $fileName;
        }
        if ($invoiceId !== null) {
            $queryParams['invoiceId'] = $invoiceId;
        }

        // If there are query parameters, append them to the path
        if (!empty($queryParams)) {
            $path .= '?' . http_build_query($queryParams);
        }

        return self::getCall($path);
    }

    public static function uploadAttachments($data = [])
    {
        $path = 'attachments/uploadAttachments';

        return self::postCall($path, $data);
    }

    public static function getAttachmentsByConsignmentIds($ids = [])
    {
        $path = 'attachments/getAttachmentsByConsignmentIds';

        // Add the ids parameter to the path only if the array is not empty
        if (!empty($ids)) {
            $path .= '?ids=' . implode(',', $ids);
        }

        return self::getCall($path);
    }

    public static function getAttachmentPodReport($id = null)
    {
        $path = 'attachments/getAttachmentPodReport';

        // Add the id parameter to the path only if it is not null
        if ($id !== null) {
            $path .= '?id=' . $id;
        }

        return self::getCall($path);
    }

    public static function getAttachment($id = null)
    {
        $path = 'attachments/getAttachment';

        // Add the id parameter to the path only if it is not null
        if ($id !== null) {
            $path .= '?id=' . $id;
        }
        return self::getCall($path);
    }

    // Path for fetching all companies; append query parameter if a specific company ID is provided
    public static function getCompanies($id = null)
    {
        $path = 'companies/getAll';
        if ($id !== null) {
            $path .= "?atOrBelowCompanyId=" . $id;
        }
        return self::getCall($path);
    }

    // Path for fetching all items with optional company ID and pagination support
    public static function getCompanyItems($companyId = null, $startIndex = 1, $retrieveSize = 200)
    {
        $path = 'items/getAll?startIndex=' . $startIndex . '&retrieveSize=' . $retrieveSize;
        if ($companyId !== null) {
            $path .= '&atOrBelowCompanyId=' . $companyId;
        }
        return self::getCall($path);
    }

    // Endpoint for authenticating the API; returns a ping response
    public static function authenticate()
    {
        return self::postCall("authenticate/ping", []);
    }

    // Perform a POST request to a given path with specified data
    private static function postCall($path, $data)
    {
        $guzzle = new Client(['base_uri' => self::$endPoint]);
        $response = $guzzle->request('POST', self::$endPoint . $path, [
            'headers' => ['token' => env('MACSHIP_TOKEN')],
            'body' => json_encode(self::cleanObject($data)),
            'debug' => false
        ]);
        return json_decode($response->getBody()->getContents());
    }

    // Perform a GET request to a given path
    private static function getCall($path)
    {
        $guzzle = new Client(['base_uri' => self::$endPoint]);
        $response = $guzzle->request('GET', self::$endPoint . $path, [
            'headers' => ['token' => env('MACSHIP_TOKEN')],
            'debug' => false
        ]);
        return json_decode($response->getBody()->getContents());
    }

    private static function deleteCall($path)
    {
        $guzzle = new Client(['base_uri' => self::$endPoint]);
        $response = $guzzle->request('DELETE', self::$endPoint . $path, [
            'headers' => ['token' => env('MACSHIP_TOKEN')],
            'debug' => false
        ]);
        return json_decode($response->getBody()->getContents());
    }


}
