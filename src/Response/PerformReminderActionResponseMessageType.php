<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\PerformReminderActionResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a PerformReminderAction request.
 *
 * @package php-ews\Response
 */
class PerformReminderActionResponseMessageType extends ResponseMessageType
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
