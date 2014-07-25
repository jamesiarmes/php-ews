<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the AlternateIdType type
 */
class AlternateIdType extends DataType
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
