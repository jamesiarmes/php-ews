<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ArrayOfRecipientsType type
 */
class ArrayOfRecipientsType extends DataType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
