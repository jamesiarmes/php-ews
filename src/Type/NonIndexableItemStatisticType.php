<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\NonIndexableItemStatisticType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a single statistic for an item that could not be indexed.
 *
 * @package php-ews\Type
 */
class NonIndexableItemStatisticType extends Type
{
    /**
     * Represents the reason for the validation error.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ErrorMessage;

    /**
     * Specifies the total number of items in a search result.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $ItemCount;

    /**
     * Contains an identifier for a mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Mailbox;
}
