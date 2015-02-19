<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BaseDelegateType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Base class for delegate requests.
 *
 * @package php-ews\Types
 */
abstract class BaseDelegateType extends BaseRequestType
{
    /**
     * Identifies the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;
}
