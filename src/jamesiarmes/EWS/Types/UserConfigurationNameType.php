<?php
/**
 * Contains UserConfigurationNameType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the name of a user configuration object. The user configuration
 * object name is the identifier for a user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 */
class UserConfigurationNameType extends EWSType
{
    /**
     * Represents a distinguished folder name of the folder that contains the
     * user configuration object.
     *
     * @since Exchange 2010
     *
     * @var DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Represents the folder identifier of the folder that contains the user
     * configuration object.
     *
     * @since Exchange 2010
     *
     * @var FolderIdType
     */
    public $FolderId;

    /**
     * The name of a user configuration object.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;
}
