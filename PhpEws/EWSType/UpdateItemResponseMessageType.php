<?php
/**
 * Definition of the UpdateItemResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the UpdateItemResponseMessageType type
 */
class UpdateItemResponseMessageType extends PhpEws\EWSType
{
    /**
     * ConflictResults property
     *
     * @var ConflictResultsType
     */
    public $ConflictResults;
}
