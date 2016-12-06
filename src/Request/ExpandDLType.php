<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\ExpandDLType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to expand a distribution list.
 *
 * @package php-ews\Request
 */
class ExpandDLType extends BaseRequestType
{
    /**
     * Identifies a fully resolved e-mail address of a distribution list.
     *
     * This mailbox represents the distribution list to expand.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
