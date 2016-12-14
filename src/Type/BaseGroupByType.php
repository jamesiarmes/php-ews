<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BaseGroupByType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Base class for item ordering.
 *
 * @package php-ews\Type
 */
abstract class BaseGroupByType extends Type
{
    /**
     * Determines the order of the groups in the grouped item array that is
     * returned in the response.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\SortDirectionType
     */
    public $Order;
}
