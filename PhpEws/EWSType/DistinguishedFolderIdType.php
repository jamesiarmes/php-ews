<?php
/**
 * Definition of the DistinguishedFolderIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DistinguishedFolderIdType type
 */
class DistinguishedFolderIdType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Id property
     *
     * @var EWSType_DistinguishedFolderIdNameType
     */
    public $Id;

    /**
     * ChangeKey property
     *
     * @var string
     */
    public $ChangeKey;
}
