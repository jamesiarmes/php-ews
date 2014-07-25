<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the FindItemResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FindItemResponseMessageType type
 */
class FindItemResponseMessageType extends DataType
{
    /**
     * RootFolder property
     *
     * @var EWSType_FindItemParentType
     */
    public $RootFolder;
}
