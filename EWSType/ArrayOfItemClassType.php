<?php
/**
 * Contains EWSType_ArrayOfItemClassType.
 */

/**
 * Represents a list of item classes.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfItemClassType extends EWSType
{
    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ItemClassType
     */
    public $ItemClass;
}
