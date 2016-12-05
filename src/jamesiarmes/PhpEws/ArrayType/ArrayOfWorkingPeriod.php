<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfWorkingPeriod.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents working period information for the mailbox user.
 *
 * @package php-ews\Array
 */
class ArrayOfWorkingPeriod extends ArrayType
{
    /**
     * Contains the work week days and hours of the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\WorkingPeriod[]
     */
    public $WorkingPeriod = array();
}
