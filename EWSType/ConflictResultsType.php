<?php
/**
 * Contains EWSType_ConflictResultsType.
 */

/**
 * Indicates the number of conflicts in an UpdateItem Operation response.
 *
 * @package php-ews\Types
 */
class EWSType_ConflictResultsType extends EWSType
{
    /**
     * Contains the number of conflicts in an UpdateItem Operation response.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Count;
}
