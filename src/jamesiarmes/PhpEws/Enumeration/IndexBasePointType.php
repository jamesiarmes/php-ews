<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\IndexBasePointType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines whether a page of items or conversations will start from the
 * beginning or the end of a set.
 *
 * @package php-ews\Enumeration
 */
class IndexBasePointType extends Enumeration
{
    /**
     * The paged view starts at the beginning of the found conversation or item
     * set.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BEGINNING = 'Beginning';

    /**
     * The paged view starts at the end of the found conversation or item set.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const END = 'End';
}
