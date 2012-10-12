<?php
/**
 * Definition of the GetDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetDelegateType type
 */
class EWSType_GetDelegateType extends EWSType
{
    /**
     * UserIds property
     *
     * @var EWSType_ArrayOfUserIdType
     */
    public $UserIds;

    /**
     * IncludePermissions property
     *
     * @var boolean
     */
    public $IncludePermissions;
}
