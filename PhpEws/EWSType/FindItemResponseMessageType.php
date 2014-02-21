<?php
/**
 * Definition of the FindItemResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FindItemResponseMessageType type
 */
class FindItemResponseMessageType extends PhpEws\EWSType
{
    /**
     * RootFolder property
     *
     * @var FindItemParentType
     */
    public $RootFolder;
}
