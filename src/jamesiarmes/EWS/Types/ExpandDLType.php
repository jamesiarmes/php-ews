<?php
/**
 * Contains ExpandDLType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to expand a distribution list.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class ExpandDLType extends EWSType
{
    /**
     * Identifies a fully resolved e-mail address of a distribution list.
     *
     * This mailbox represents the distribution list to expand.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
