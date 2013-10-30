<?php
/**
 * Contains EWSType_AlternatePublicFolderItemIdType.
 */

/**
 * Describes a public folder item identifier to convert to another identifier
 * format.
 *
 * @package php-ews\Types
 */
class EWSType_AlternatePublicFolderItemIdType extends EWSType
{
    /**
     * Identifies the public folder that contains the public folder item.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $FolderId;

    /**
     * Identifies the format that describes the public folder item identifier to
     * convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_IdFormatType
     */
    public $Format;

    /**
     * Identifier the public folder item to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $ItemId;
}
