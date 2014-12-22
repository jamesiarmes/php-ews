<?php
/**
 * Contains EWSType_RequestServerVersion.
 */

/**
 * Defines the Microsoft Exchange Server version of a request.
 *
 * @package php-ews\Types
 */
class EWSType_RequestServerVersion extends EWSType
{
    /**
     * Identifies the Exchange Server version used in the request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExchangeVersionType
     */
    public $Version;
}
