<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration.
 */

namespace jamesiarmes\PhpEws;

/**
 * Base class for Exchange Web Service Enumerations.
 *
 * @package php-ews\Enumeration
 */
class Enumeration extends Type
{
    /**
     * Element value.
     *
     * @deprecated 1.0.0
     *   This property will be removed in a future release and should not be
     *   used. Instead, you should reference the constants implemented in the
     *   class directly.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this enumeration as a string..
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
