<?php
/**
 * Contains EWSType_BaseDelegateType.
 */

/**
 * Base class for delegate requests.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_BaseDelegateType extends EWSType
{
    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
