<?php
/**
 * Contains EWSType_OpenAsAdminOrSystemServiceType.
 */

/**
 * For internal use only. Not used by clients.
 *
 * @package php-ews\Types
 */
class EWSType_OpenAsAdminOrSystemServiceType extends EWSType
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
