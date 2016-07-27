<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\BaseDelegateType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Base class for delegate requests.
 *
 * @package php-ews\Request
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
