<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\RoutingType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Represents the routing protocol for a recipient.
 *
 * @package php-ews\Enumeration
 */
class RoutingType extends Enumeration
{
    /**
     * Route the email using the SMTP protocol.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SMTP = 'SMTP';
}
