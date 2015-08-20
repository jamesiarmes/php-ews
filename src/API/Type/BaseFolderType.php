<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BaseFolderType
 *
 *
 * XSD Type: BaseFolderType
 *
 * @method FolderIdType getFolderId()
 * @method BaseFolderType setFolderId(FolderIdType $folderId)
 * @method FolderIdType getParentFolderId()
 * @method BaseFolderType setParentFolderId(FolderIdType $parentFolderId)
 * @method string getFolderClass()
 * @method BaseFolderType setFolderClass(string $folderClass)
 * @method string getDisplayName()
 * @method BaseFolderType setDisplayName(string $displayName)
 * @method integer getTotalCount()
 * @method BaseFolderType setTotalCount(integer $totalCount)
 * @method integer getChildFolderCount()
 * @method BaseFolderType setChildFolderCount(integer $childFolderCount)
 * @method array getExtendedProperty()
 * @method BaseFolderType setExtendedProperty(array $extendedProperty)
 * @method ManagedFolderInformationType getManagedFolderInformation()
 * @method BaseFolderType setManagedFolderInformation(ManagedFolderInformationType $managedFolderInformation)
 * @method EffectiveRightsType getEffectiveRights()
 * @method BaseFolderType setEffectiveRights(EffectiveRightsType $effectiveRights)
 */
class BaseFolderType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var string
     */
    protected $folderClass = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var integer
     */
    protected $totalCount = null;

    /**
     * @var integer
     */
    protected $childFolderCount = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ExtendedPropertyType[]
     */
    protected $extendedProperty = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ManagedFolderInformationType
     */
    protected $managedFolderInformation = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EffectiveRightsType
     */
    protected $effectiveRights = null;
}
