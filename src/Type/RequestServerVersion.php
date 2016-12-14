<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RequestServerVersion.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the Microsoft Exchange Server version of a request.
 *
 * @package php-ews\Type
 */
class RequestServerVersion extends Type
{
    /**
     * Identifies the Exchange Server version used in the request.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ExchangeVersionType
     */
    public $Version;
}
