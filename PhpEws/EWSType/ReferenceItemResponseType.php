<?php
/**
 * Definition of the ReferenceItemResponseType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ReferenceItemResponseType type
 */
class ReferenceItemResponseType extends PhpEws\EWSType
{
    /**
     * ReferenceItemId property
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
