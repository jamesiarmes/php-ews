<?php
/**
 * Contains ArrayOfWorkingPeriod.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents working period information for the mailbox user.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfWorkingPeriod extends EWSType
{
    /**
     * Contains the work week days and hours of the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var WorkingPeriod
     */
    public $WorkingPeriod;
}
