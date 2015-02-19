<?php
/**
 * Contains EWSType_ArrayOfWorkingPeriod.
 */

/**
 * Represents working period information for the mailbox user.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfWorkingPeriod extends EWSType
{
    /**
     * Contains the work week days and hours of the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\WorkingPeriod
     */
    public $WorkingPeriod;
}
