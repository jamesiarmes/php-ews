<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetDelegateType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to get information about delegates to a mailbox.
 *
 * @package php-ews\Request
 */
class GetDelegateType extends BaseDelegateType
{
    /**
     * Indicates whether the response contains permission settings for each
     * delegate user.
     *
     * @since Exchange 2007 SP1
     *
     * @var boolean
     */
    public $IncludePermissions;

    /**
     * Contains an array of delegate users to get from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfUserIdType
     */
    public $UserIds;
}
