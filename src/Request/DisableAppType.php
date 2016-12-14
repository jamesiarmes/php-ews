<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\DisableAppType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to disable an app.
 *
 * @package php-ews\Request
 */
class DisableAppType extends BaseRequestType
{
    /**
     * Specifies the reason for disabling an app.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DisableReasonType
     */
    public $DisableReason;

    /**
     * Specifies the identifier of an item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ID;
}
