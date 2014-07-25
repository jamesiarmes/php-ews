<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends DataType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * @var ContactItemType
     */
    public $Contact;
}
