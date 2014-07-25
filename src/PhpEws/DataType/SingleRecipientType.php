<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the SingleRecipientType type
 */
class SingleRecipientType extends DataType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
