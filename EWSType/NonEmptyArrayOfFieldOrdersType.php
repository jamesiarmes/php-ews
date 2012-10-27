<?php
/**
 * Contains EWSType_NonEmptyArrayOfFieldOrdersType.
 */

/**
 * Defines how items are sorted in a FindItem or FindConversation request.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfFieldOrdersType extends EWSType
{
    /**
     * Represents a single field by which to sort results and indicates the
     * direction for the sort.
     *
     * One or more of these elements may be included.
     *
     * FieldOrder elements are applied in the order specified for sorting.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FieldOrderType
     */
    public $FieldOrder;
}
