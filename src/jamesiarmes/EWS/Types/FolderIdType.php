<?php
/**
 * Contains FolderIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the identifier of the parent folder that contains the item or
 * folder.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ItemIdType.
 */
class FolderIdType extends EWSType
{
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
}
