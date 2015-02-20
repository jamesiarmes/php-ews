<?php
/**
 * Contains BasePagingType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for defining how results should be paged.
 *
 * @package jamesiarmes\EWS\Types
 */
class BasePagingType extends EWSType
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
