<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Specifies an array of all email addresses of an associated persona.
 *
 * @package php-ews\Array
 */
class ArrayOfEmailAddressesType extends ArrayType
{
    /**
     * Represents a fully resolved e-mail address.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType[]
     */
    public $Address = array();
}
