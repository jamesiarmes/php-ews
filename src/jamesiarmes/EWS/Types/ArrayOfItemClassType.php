<?php
/**
 * Contains ArrayOfItemClassType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a list of item classes.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfItemClassType extends EWSType
{
    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2010 SP1
     *
     * @var ItemClassType
     */
    public $ItemClass;
}
