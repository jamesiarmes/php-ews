<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\AddDistributionGroupToImListType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to add a distribution list to an instant message list.
 *
 * @package php-ews\Request
 */
class AddDistributionGroupToImListType extends BaseRequestType
{
    /**
     * Contains the display name of a new instant messaging group contact or the
     * display name of a new instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Represents the Simple Mail Transfer Protocol (SMTP) address of an account
     * to be used for impersonation or a Simple Mail Transfer Protocol (SMTP)
     * recipient address of a calendar or contact sharing request.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $SmtpAddress;
}
