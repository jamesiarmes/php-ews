<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DistinguishedFolderIdType type
 */
class DistinguishedFolderIdType extends DataType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Id property
     *
     * @var DistinguishedFolderIdNameType
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
