<?php
/**
 * Contains ConflictResultsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Indicates the number of conflicts in an UpdateItem Operation response.
 *
 * @package jamesiarmes\EWS\Types
 */
class ConflictResultsType extends EWSType
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
