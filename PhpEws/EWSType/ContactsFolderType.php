<?php
/**
 * Definition of the ContactsFolderType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ContactsFolderType type
 */
class ContactsFolderType extends PhpEws\EWSType
{
    /**
     * PermissionSet property
     *
     * @var PermissionSetType
     */
    public $PermissionSet;
}
