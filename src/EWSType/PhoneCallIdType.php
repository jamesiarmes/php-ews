<?php
/**
 * Contains EWSType_PhoneCallIdType.
 */

/**
 * Represents the identifier of a phone call.
 *
 * @package php-ews\Types
 */
class EWSType_PhoneCallIdType extends EWSType
{
    /**
     * Identifies the phone call to disconnect.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;
}
