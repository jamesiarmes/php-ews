<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing BaseFolderType
 *
 *
 * XSD Type: BaseFolderType
 *
 * @method BaseFolderType getFolderId()
 * @method BaseFolderType setFolderId(FolderIdType $folderId)
 * @method BaseFolderType getParentFolderId()
 * @method BaseFolderType setParentFolderId(FolderIdType $parentFolderId)
 * @method BaseFolderType getFolderClass()
 * @method BaseFolderType setFolderClass(string $folderClass)
 * @method BaseFolderType getDisplayName()
 * @method BaseFolderType setDisplayName(string $displayName)
 * @method BaseFolderType getTotalCount()
 * @method BaseFolderType setTotalCount(integer $totalCount)
 * @method BaseFolderType getChildFolderCount()
 * @method BaseFolderType setChildFolderCount(integer $childFolderCount)
 * @method BaseFolderType getExtendedProperty()
 * @method BaseFolderType setExtendedProperty(array $extendedProperty)
 * @method BaseFolderType getManagedFolderInformation()
 * @method BaseFolderType setManagedFolderInformation(ManagedFolderInformationType $managedFolderInformation)
 * @method BaseFolderType getEffectiveRights()
 * @method BaseFolderType setEffectiveRights(EffectiveRightsType $effectiveRights)
 */
class BaseFolderType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $parentFolderId
     */
    protected $parentFolderId = null;

    /**
     * @property string $folderClass
     */
    protected $folderClass = null;

    /**
     * @property string $displayName
     */
    protected $displayName = null;

    /**
     * @property integer $totalCount
     */
    protected $totalCount = null;

    /**
     * @property integer $childFolderCount
     */
    protected $childFolderCount = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ExtendedPropertyType[]
     * $extendedProperty
     */
    protected $extendedProperty = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ManagedFolderInformationType
     * $managedFolderInformation
     */
    protected $managedFolderInformation = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EffectiveRightsType $effectiveRights
     */
    protected $effectiveRights = null;


}

