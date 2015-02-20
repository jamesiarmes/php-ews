<?php
/**
 * Contains BaseDelegateType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for delegate requests.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class BaseDelegateType extends EWSType
{
    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
