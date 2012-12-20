<?php
/**
 * Definition of the FindItemResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the FindItemResponseMessageType type
 */
class FindItemResponseMessageType extends EWSType
{
    /**
     * RootFolder property
     *
     * @var EWSType_FindItemParentType
     */
    public $RootFolder;
}
