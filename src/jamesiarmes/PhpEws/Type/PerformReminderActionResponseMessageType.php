<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PerformReminderActionResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the response to a PerformReminderAction request.
 *
 * @package php-ews\Type
 */
class PerformReminderActionResponseMessageType extends Type
{
    /**
     * Specifies the identifiers of updated reminder items.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemIdsType
     */
    public $UpdatedItemIds;
}
