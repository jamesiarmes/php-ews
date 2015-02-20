<?php
/**
 * Contains ArrayOfEmailAddressesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Specifies an array of all email addresses of an associated persona.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfEmailAddressesType extends EWSType
{
    /**
     * Represents a fully resolved e-mail address.
     *
     * @since Exchange 2010
     *
     * @var EmailAddressType
     */
    public $Address;
}
