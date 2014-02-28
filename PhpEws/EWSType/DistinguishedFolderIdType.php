<?php
/**
 * Definition of the DistinguishedFolderIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the DistinguishedFolderIdType type
 */
class DistinguishedFolderIdType extends PhpEws\EWSType
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
