<?php
/**
 * Contains EWSType_ItemIdType.
 */

/**
 * Contains the unique identifier and change key of an item in the Exchange
 * store.
 *
 * @package php-ews\Types
 */
class EWSType_ItemIdType extends EWSType
{
    /**
     * Identifies a specific item in the Exchange store.
     *
     * Id is case-sensitive; therefore, comparisons between Ids must be
     * case-sensitive or binary.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Id;

    /**
     * Identifies a specific version of an item.
     *
     * A ChangeKey is required for the following scenarios:
     * - The UpdateItem element requires a ChangeKey if the ConflictResolution
     *   attribute is set to AutoResolve. AutoResolve is a default value. If the
     *   ChangeKey attribute is not included, the response will return a
     *   ResponseCode value equal to ErrorChangeKeyRequired.
     * - The SendItem element requires a ChangeKey to test whether the attempted
     *   operation will act upon the most recent version of an item. If the
     *   ChangeKey attribute is not included in the ItemId or if the ChangeKey
     *   is empty, the response will return a ResponseCode value equal to
     *   ErrorStaleObject.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ChangeKey;
}
