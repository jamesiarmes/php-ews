<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetAppMarketplaceUrlResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a GetAppMarketplaceUrl request.
 *
 * @package php-ews\Response
 */
class GetAppMarketplaceUrlResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the URL for the app marketplace.
     *
     * @since Exchange 2013 SP1
     *
     * @var string
     */
    public $AppMarketplaceUrl;

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    public $ConnectorsManagementUrl;
}
