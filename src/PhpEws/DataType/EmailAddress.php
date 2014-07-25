<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the EmailAddress type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the EmailAddress type
 */
class EmailAddress extends DataType
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * Address property
     *
     * @var string
     */
    public $Address;

    /**
     * RoutingType property
     *
     * @var string
     */
    public $RoutingType;
}
