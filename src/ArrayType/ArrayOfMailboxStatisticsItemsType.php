<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfMailboxStatisticsItemsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of one or more mailbox stats.
 *
 * @package php-ews\Array
 */
class ArrayOfMailboxStatisticsItemsType extends ArrayType
{
    /**
     * Mailbox statistics.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\MailboxStatisticsItemType[]
     */
    public $MailboxStat = array();
}
