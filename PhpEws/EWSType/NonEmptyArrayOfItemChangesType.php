<?php
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 */
class NonEmptyArrayOfItemChangesType extends PhpEws\EWSType
{
    /**
     * ItemChange property
     *
     * @var ItemChangeType
     */
    public $ItemChange;
}
