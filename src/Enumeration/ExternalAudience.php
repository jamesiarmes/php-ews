<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ExternalAudience.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Identifies to whom external Out of Office (OOF) messages are sent..
 *
 * @package php-ews\Enumeration
 */
class ExternalAudience extends Enumeration
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
}
