<?php
/**
 * Contains EWSType_ArrayOfEmailAddressesType.
 */

/**
 * Specifies an array of all email addresses of an associated persona.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfEmailAddressesType extends EWSType
{
    /**
     * Represents a fully resolved e-mail address.
     *
     * @since Exchnage 2010 SP1
     *
     * @var EWSType_EmailAddressType
     */
    public $Address;
}
