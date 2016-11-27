<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ExtendedAttributeType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Internal use only.
 *
 * @package php-ews\Type
 */
class ExtendedAttributeType extends Type
{
    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Name;

    /**
     * Internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Value;
}
