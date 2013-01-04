<?php
/**
 * Definition of the GetDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the GetDelegateType type
 */
class GetDelegateType extends EWSType
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
