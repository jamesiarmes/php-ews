<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\Duration.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a time span.
 *
 * @package php-ews\Type
 */
class Duration extends Type
{
    /**
     * Represents the end of the time span.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndTime;

    /**
     * Represents the start of the time span.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartTime;
}
