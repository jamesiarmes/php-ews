<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\SortDirectionType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Identifies a sort order direction.
 *
 * @package php-ews\Enumeration
 */
class SortDirectionType extends Enumeration
{
    /**
     * Items are sorted in ascending order.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ASCENDING = 'Ascending';

    /**
     * Items are sorted in descending order.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DESCENDING = 'Descending';
}
