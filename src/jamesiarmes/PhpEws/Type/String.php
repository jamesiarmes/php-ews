<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\String;
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Base class for string types.
 *
 * @package php-ews\Type
 */
abstract class String extends Type
{
    /**
     * Value of the element.
     *
     * @var string
     */
    public $_;
}
