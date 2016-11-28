<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\InstallAppResponseType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to an InstallApp request.
 *
 * @package php-ews\Response
 */
class InstallAppResponseType extends ResponseMessageType
{
    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var \jamesiarmes\PhpEws\Type\InstalledAppType
     *
     * @todo Update once documentation exists.
     */
    public $Extension;

    /**
     * Whether this is the first time the app is being installed.
     *
     * @since Exchange 2016
     *
     * @var boolean
     */
    public $WasFirstInstall;
}
