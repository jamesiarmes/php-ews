<?php
/**
 * Definition of the AlternateIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the AlternateIdType type
 */
class AlternateIdType extends EWSType
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
     * @var EWSType_NonEmptyStringType
     */
    public $Mailbox;
}
