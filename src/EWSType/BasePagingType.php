<?php
/**
 * Contains EWSType_BasePagingType.
 */

/**
 * Base class for defining how results should be paged.
 *
 * @package php-ews\Types
 */
class EWSType_BasePagingType extends EWSType
{
    /**
     * Describes the maximum number of items or conversations to return in the
     * response.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $MaxEntriesReturned;
}
