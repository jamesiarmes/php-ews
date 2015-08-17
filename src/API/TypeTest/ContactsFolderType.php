<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ContactsFolderType
 *
 *
 * XSD Type: ContactsFolderType
 *
 * @method ContactsFolderType getSharingEffectiveRights()
 * @method ContactsFolderType setSharingEffectiveRights(string $sharingEffectiveRights)
 * @method ContactsFolderType getPermissionSet()
 * @method ContactsFolderType setPermissionSet(PermissionSetType $permissionSet)
 */
class ContactsFolderType extends BaseFolderType
{

    /**
     * @property string $sharingEffectiveRights
     */
    protected $sharingEffectiveRights = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\PermissionSetType $permissionSet
     */
    protected $permissionSet = null;


}

