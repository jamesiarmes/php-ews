<?php
/**
 * Contains DistinguishedFolderIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies folders that can be referenced by name.
 *
 * @package jamesiarmes\EWS\Types
 */
class DistinguishedFolderIdType extends EWSType
{
    /**
     * Contains a string that identifies a version of a folder that is
     * identified by the Id attribute.
     *
     * This attribute is optional. Use this attribute to make sure that the
     * correct version of a folder is used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ChangeKey;

    /**
     * Identifies a default folder.
     *
     * This attribute is required.
     *
     * @since Exchange 2007
     *
     * @var DistinguishedFolderIdNameType
     */
    public $Id;

    /**
     * Identifies a primary SMTP address.
     *
     * Proxy addresses are not allowed.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
