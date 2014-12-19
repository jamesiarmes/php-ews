<?php
/**
 * Contains EWSType_UserConfigurationNameType.
 */

/**
 * Represents the name of a user configuration object. The user configuration
 * object name is the identifier for a user configuration object.
 *
 * @package php-ews\Types
 */
class EWSType_UserConfigurationNameType extends EWSType
{
    /**
     * Represents a distinguished folder name of the folder that contains the
     * user configuration object.
     *
     * @since Exchange 2010
     *
     * @var EWSType_DistinguishedFolderIdType
     */
    public $DistinguishedFolderId;

    /**
     * Represents the folder identifier of the folder that contains the user
     * configuration object.
     *
     * @since Exchange 2010
     *
     * @var EWSType_FolderIdType
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
