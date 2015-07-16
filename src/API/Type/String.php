<?php
/**
 * Contains \jamesiarmes\PEWS\API\Type\String;
 */

namespace jamesiarmes\PEWS\API\Type;

use \jamesiarmes\PEWS\API\Type;

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
