<?php
/**
 * Contains NonEmptyArrayOfFolderChangeDescriptionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a set of elements that define append, set, and delete changes to
 * folder properties.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfFolderChangeDescriptionsType extends EWSType
{
    /**
     * Represents data to append to a folder property during an UpdateFolder
     * operation.
     *
     * This property is not implemented and should not be used.
     *
     * @since Exchange 2007
     *
     * @var AppendToFolderFieldType
     */
    public $AppendToFolderField;

    /**
     * Represents an operation to delete a given property from a folder during
     * an UpdateFolder operation.
     *
     * @since Exchange 2007
     *
     * @var DeleteFolderFieldType
     */
    public $DeleteFolderField;

    /**
     * Represents an update to a single property on a folder in an UpdateFolder
     * operation.
     *
     * @since Exchange 2007
     *
     * @var SetFolderFieldType
     */
    public $SetFolderField;
}
