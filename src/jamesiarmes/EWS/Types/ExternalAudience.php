<?php
/**
 * Contains ExternalAudience.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies to whom external Out of Office (OOF) messages are sent..
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class ExternalAudience extends EWSType
{
    /**
     * E-mail senders outside the mailbox user's organization who send messages
     * to the user will receive an external OOF message response..
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ALL = 'All';

    /**
     * E-mail senders outside the mailbox user's organization who send messages
     * to the user will only receive an external OOF message response if the
     * sender is in the user's Exchange store contact list.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const KNOWN = 'Known';

    /**
     * E-mail senders outside the mailbox user's organization who send messages
     * to the user will not receive an external OOF message response.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NONE = 'None';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
