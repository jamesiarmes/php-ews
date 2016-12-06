<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\InstallAppType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines the request to install an app.
 *
 * @package php-ews\Request
 */
class InstallAppType extends BaseRequestType
{
    /**
     * Contains the base64-encoded app manifest file.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $Manifest;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    public $ManifestUrl;

    /**
     * The asset id of the addin in the marketplace
     *
     * @since Exchange 2016
     *
     * @var string
     */
    public $MarketplaceAssetId;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    public $MarketplaceContentMarket;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var boolean
     *
     * @todo Update once documentation exists.
     */
    public $SendWelcomeEmail;
}
