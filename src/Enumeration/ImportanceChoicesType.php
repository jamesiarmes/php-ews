<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\ImportanceChoicesType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Describes the importance of an item or the aggregated importance of all items
 * in a conversation in the current folder.
 *
 * @package php-ews\Enumeration
 */
class ImportanceChoicesType extends Enumeration
{
    /**
     * High importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HIGH = 'High';

    /**
     * Low importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LOW = 'Low';

    /**
     * Normal importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NORMAL = 'Normal';
}
