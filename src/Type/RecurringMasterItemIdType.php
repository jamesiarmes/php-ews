<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RecurringMasterItemIdType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a  recurrence master item by identifying the identifiers of one of
 * its related occurrence items.
 *
 * @package php-ews\Type
 */
class RecurringMasterItemIdType extends BaseItemIdType
{
    /**
     * Identifies a specific version of a single occurrence of a recurring
     * master item.
     *
     * Additionally, the recurring master item is also identified because it and
     * the single occurrence will contain the same change key.
     *
     * This attribute is optional.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * Identifies a single occurrence of a recurring master item.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $OccurrenceId;
}
