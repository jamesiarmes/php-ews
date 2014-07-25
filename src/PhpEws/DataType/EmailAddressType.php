<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

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
     * @var NonEmptyStringType
     */
    public $EmailAddress;

    /**
     * RoutingType property
     *
     * @var NonEmptyStringType
     */
    public $RoutingType;

    /**
     * MailboxType property
     *
     * @var MailboxTypeType
     */
    public $MailboxType;

    /**
     * ItemId property
     *
     * @var ItemIdType
     */
    public $ItemId;
}
