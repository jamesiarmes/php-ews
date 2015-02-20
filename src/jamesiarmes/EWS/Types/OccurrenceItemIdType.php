<?php
/**
 * Contains OccurrenceItemIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies a single occurrence of a recurring item.
 *
 * @package jamesiarmes\EWS\Types
 */
class OccurrenceItemIdType extends EWSType
{
    /**
     * Identifies a specific version of the recurring master or an item
     * occurrence.
     *
     * If either the recurring master or any of its occurrences change, the
     * changeKey changes. The ChangeKey is the same for the recurring master and
     * all occurrences.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * Identifies the index of the item occurrence.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $InstanceIndex;

    /**
     * Identifies the recurring master of a recurring item.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $RecurringMasterId;
}
