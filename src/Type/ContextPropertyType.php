<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ContextPropertyType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the context for an item.
 *
 * @package php-ews\Type
 */
class ContextPropertyType extends Type
{
    /**
     * Specifies the key of the context.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    public $Key;

    /**
     * Specifies the value of the context.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    public $Value;
}
