<?php
/**
 * Definition of the BaseFolderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the BaseFolderType type
 */
class BaseFolderType extends EWSType
{
    /**
     * FolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $FolderId;

    /**
     * ParentFolderId property
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * FolderClass property
     *
     * @var string
     */
    public $FolderClass;

    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * TotalCount property
     *
     * @var integer
     */
    public $TotalCount;

    /**
     * ChildFolderCount property
     *
     * @var integer
     */
    public $ChildFolderCount;

    /**
     * ExtendedProperty property
     *
     * @var EWSType_ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * ManagedFolderInformation property
     *
     * @var EWSType_ManagedFolderInformationType
     */
    public $ManagedFolderInformation;

    /**
     * EffectiveRights property
     *
     * @var EWSType_EffectiveRightsType
     */
    public $EffectiveRights;
}
