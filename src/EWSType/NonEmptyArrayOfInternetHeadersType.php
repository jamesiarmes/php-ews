<?php
/**
 * Contains EWSType_NonEmptyArrayOfInternetHeadersType.
 */

/**
 * Represents a collection of some of the Internet message headers that are
 * contained in an item in a mailbox.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfInternetHeadersType extends EWSType
{
    /**
     * Represents the Internet message header for a given header within the
     * headers collection.
     *
     * @since Exchange 2007
     *
     * @var EWSType_InternetHeaderType
     */
    public $InternetMessageHeader;
}
