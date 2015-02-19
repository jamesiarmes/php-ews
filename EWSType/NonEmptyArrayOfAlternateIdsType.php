<?php
/**
 * Contains EWSType_NonEmptyArrayOfAlternateIdsType.
 */

/**
 * Defines the source identifiers to convert.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfAlternateIdsType extends EWSType
{
    /**
     * Describes an item or folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\AlternateIdType
     */
    public $AlternateId;

    /**
     * Describes a public folder identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\AlternatePublicFolderIdType
     */
    public $AlternatePublicFolderId;

    /**
     * Describes a public folder item identifier to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\AlternatePublicFolderItemIdType
     */
    public $AlternatePublicFolderItemId;
}
