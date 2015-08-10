<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing CalendarFolderType
 *
 *
 * XSD Type: CalendarFolderType
 *
 * @method CalendarFolderType getSharingEffectiveRights()
 * @method CalendarFolderType setSharingEffectiveRights($sharingEffectiveRights)
 * @method CalendarFolderType getPermissionSet()
 * @method CalendarFolderType setPermissionSet($permissionSet)
 */
class CalendarFolderType extends BaseFolderType
{

    /**
     * @property string $sharingEffectiveRights
     */
    protected $sharingEffectiveRights = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\CalendarPermissionSetType
     * $permissionSet
     */
    protected $permissionSet = null;


}

