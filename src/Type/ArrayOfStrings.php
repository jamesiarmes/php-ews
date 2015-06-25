<?php
/**
 * Created by PhpStorm.
 * User: true
 * Date: 23-6-15
 * Time: 17:38
 */

namespace jamesiarmes\PEWS\Type;

use jamesiarmes\PEWS\Type;

class ArrayOfStrings extends Type
{
    /**
     * Contains a single string.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $String;

    /**
     * Properly converts the value of this type to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->String;
    }
}
