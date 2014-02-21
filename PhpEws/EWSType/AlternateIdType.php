<?php
/**
 * Definition of the AlternateIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AlternateIdType type
 */
class AlternateIdType extends PhpEws\EWSType
{
    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * Mailbox property
     *
     * @var NonEmptyStringType
     */
    public $Mailbox;
}
