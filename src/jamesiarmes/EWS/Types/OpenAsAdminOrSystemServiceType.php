<?php
/**
 * Contains OpenAsAdminOrSystemServiceType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * For internal use only. Not used by clients.
 *
 * @package jamesiarmes\EWS\Types
 */
class OpenAsAdminOrSystemServiceType extends EWSType
{
    /**
     * Not intended for client use.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $ConnectingSID;

    /**
     * Not intended for client use.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $LogonType;
}
