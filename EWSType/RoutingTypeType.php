<?php
/**
 * Contains EWSType_RoutingTypeType.
 */

/**
 * Represents the routing protocol for a recipient.
 *
 * @package php-ews\Enumerations
 */
class EWSType_RoutingTypeType extends EWSType
{
    /**
     * Route the email using the SMTP protocol.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SMTP = 'SMTP';

    /**
     * Indicates the routing type for a recipient.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
