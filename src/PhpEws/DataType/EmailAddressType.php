<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the EmailAddressType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the EmailAddressType type
 */
class EmailAddressType extends DataType
{
    /**
     * Name property
     *
     * @var string
     */
    public $Name;

    /**
     * EmailAddress property
     *
     * @var EWSType_NonEmptyStringType
     */
    public $EmailAddress;

    /**
     * RoutingType property
     *
     * @var EWSType_NonEmptyStringType
     */
    public $RoutingType;

    /**
     * MailboxType property
     *
     * @var EWSType_MailboxTypeType
     */
    public $MailboxType;

    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;
}
