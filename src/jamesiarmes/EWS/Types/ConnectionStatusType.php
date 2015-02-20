<?php
/**
 * Contains ConnectionStatusType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Provides a text description of the status of a streaming subscription.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class ConnectionStatusType extends EWSType
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

    /**
     * Element value.
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
