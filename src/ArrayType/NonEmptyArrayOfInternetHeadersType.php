<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfInternetHeadersType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of some of the Internet message headers that are
 * contained in an item in a mailbox.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfInternetHeadersType extends ArrayType
{
    /**
     * Represents the Internet message header for a given header within the
     * headers collection.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\InternetHeaderType[]
     */
    public $InternetMessageHeader = array();
}
