<?php
/**
 * Contains EWSType_FolderIdType.
 */

/**
 * Represents the identifier of the parent folder that contains the item or
 * folder.
 *
 * @package php-ews\Types
 */
class EWSType_FolderIdType extends EWSType
{
    /**
     * Contains a string that identifies a folder in the Exchange store.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Id;

    /**
     * Contains a string that identifies a version of a folder that is
     * identified by the Id attribute.
     *
     * This attribute is optional. Use this attribute to make sure that the
     * correct version of a folder is used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ChangeKey;
}
