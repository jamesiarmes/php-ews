<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RemoveDelegateType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a request to remove delegates from a mailbox.
 *
 * @package php-ews\Types
 */
class RemoveDelegateType extends BaseDelegateType
{
    /**
     * Contains an array of delegate users to remove from a principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfUserIdType
     */
    public $UserIds;
}
