<?php
/**
 * Definition of the UpdateItemResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the UpdateItemResponseMessageType type
 */
class UpdateItemResponseMessageType extends EWSType
{
    /**
     * ConflictResults property
     *
     * @var EWSType_ConflictResultsType
     */
    public $ConflictResults;
}
