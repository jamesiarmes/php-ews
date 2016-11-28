<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetAppManifestsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Base element for a request to return the manifest for apps.
 *
 * @package php-ews\Request
 */
class GetAppManifestsType extends BaseRequestType
{
    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPrivateCatalogAddInsType
     *
     * @todo Update once documentation exists.
     */
    public $AddIns;

    /**
     * Contains the version of the JavaScript API for Office supported by the
     * client.
     *
     * @since Exchange 2013 SP1
     *
     * @var string
     */
    public $ApiVersionSupported;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     * @todo Determine if we need a ListOfExtensionIdsType implementation.
     */
    public $ExtensionIds;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var boolean
     *
     * @todo Update once documentation exists.
     */
    public $IncludeAllInstalledAddIns;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var boolean
     *
     * @todo Update once documentation exists.
     */
    public $IncludeCustomAppsData;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var boolean
     *
     * @todo Update once documentation exists.
     */
    public $IncludeEntitlementData;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var boolean
     *
     * @todo Update once documentation exists.
     */
    public $IncludeManifestData;

    /**
     * Contains the version of the manifest schema supported by the client.
     *
     * @since Exchange 2013 SP1
     *
     * @var string
     */
    public $SchemaVersionSupported;
}
