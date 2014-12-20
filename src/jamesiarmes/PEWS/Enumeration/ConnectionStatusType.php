<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\ConnectionStatusType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Provides a text description of the status of a streaming subscription.
 *
 * @package php-ews\Enumeration
 */
class ConnectionStatusType extends Enumeration
{
    /**
     * Specifies that the connection has been closed.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CLOSED = 'Closed';

    /**
     * Specifies that the connection is open.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const OK = 'OK';
}
