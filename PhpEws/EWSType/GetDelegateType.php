<?php
/**
 * Definition of the GetDelegateType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetDelegateType type
 */
class GetDelegateType extends PhpEws\EWSType
{
    /**
     * UserIds property
     *
     * @var ArrayOfUserIdType
     */
    public $UserIds;

    /**
     * IncludePermissions property
     *
     * @var boolean
     */
    public $IncludePermissions;
}
