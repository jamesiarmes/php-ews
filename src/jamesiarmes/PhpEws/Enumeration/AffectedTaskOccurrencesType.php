<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\AffectedTaskOccurrencesType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines whether a task instance or a task master is deleted by a DeleteItem
 * operation.
 *
 * @package php-ews\Enumeration
 */
class AffectedTaskOccurrencesType extends Enumeration
{
    /**
     * A delete item request deletes the master task, and therefore all
     * recurring tasks that are associated with the master task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ALL = 'AllOccurrences';

    /**
     * A delete item request deletes only specific occurrences of a task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SPECIFIED = 'SpecifiedOccurrenceOnly';
}
