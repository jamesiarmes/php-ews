<?php
/**
 * Definition of the ReferenceItemResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ReferenceItemResponseType type
 */
class ReferenceItemResponseType extends EWSType
{
    /**
     * ReferenceItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
