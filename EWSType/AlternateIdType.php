<?php
/**
 * Definition of the AlternateIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AlternateIdType type
 */
class EWSType_AlternateIdType extends EWSType
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
