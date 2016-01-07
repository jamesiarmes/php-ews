<?php
/**
 * Contains EWSType_BaseFolderType.
 */

/**
 * Base class for folder types.
 *
 * @package php-ews\Types
 */
class EWSType_BaseFolderType extends EWSType
{
    /**
     * Represents the number of child folders that are contained within a
     * folder.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $ChildFolderCount;

    /**
     * Contains the display name of a folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Contains the client's rights based on the permission settings for the
     * item or folder.
     *
     * This element is read-only.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_EffectiveRightsType
     */
    public $EffectiveRights;

    /**
     * Identifies extended properties on folders.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * Represents the folder class for a given folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FolderClass;

    /**
     * Contains the identifier and change key of a folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * Contains information about a managed folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ManagedFolderInformationType
     */
    public $ManagedFolderInformation;

    /**
     * Represents the identifier of the parent folder that contains the folder.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * Represents the total count of items within a given folder.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalCount;
}
