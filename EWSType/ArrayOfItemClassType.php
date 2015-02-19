<?php
/**
 * Contains EWSType_ArrayOfItemClassType.
 */

/**
 * Represents a list of item classes.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfItemClassType extends EWSType
{
    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Enumeration\ItemClassType
     */
    public $ItemClass;
}
