<?php
/**
 * Contains RequestServerVersion.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the Microsoft Exchange Server version of a request.
 *
 * @package jamesiarmes\EWS\Types
 */
class RequestServerVersion extends EWSType
{
    /**
     * Identifies the Exchange Server version used in the request.
     *
     * @since Exchange 2007
     *
     * @var ExchangeVersionType
     */
    public $Version;
}
