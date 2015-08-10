<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing BaseFolderType
 *
 *
 * XSD Type: BaseFolderType
 *
 * @method BaseFolderType getFolderId()
 * @method BaseFolderType setFolderId($folderId)
 * @method BaseFolderType getParentFolderId()
 * @method BaseFolderType setParentFolderId($parentFolderId)
 * @method BaseFolderType getFolderClass()
 * @method BaseFolderType setFolderClass($folderClass)
 * @method BaseFolderType getDisplayName()
 * @method BaseFolderType setDisplayName($displayName)
 * @method BaseFolderType getTotalCount()
 * @method BaseFolderType setTotalCount($totalCount)
 * @method BaseFolderType getChildFolderCount()
 * @method BaseFolderType setChildFolderCount($childFolderCount)
 * @method BaseFolderType getExtendedProperty()
 * @method BaseFolderType setExtendedProperty($extendedProperty)
 * @method BaseFolderType getManagedFolderInformation()
 * @method BaseFolderType setManagedFolderInformation($managedFolderInformation)
 * @method BaseFolderType getEffectiveRights()
 * @method BaseFolderType setEffectiveRights($effectiveRights)
 */
class BaseFolderType extends Type
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
     * @property array $extendedProperty
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

