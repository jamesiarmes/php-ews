<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\UninstallAppType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to uninstall an app by its identifier.
 *
 * @package php-ews\Request
 */
class UninstallAppType extends BaseRequestType
{
    /**
     * Specifies the identifier of an app.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ID;
}
