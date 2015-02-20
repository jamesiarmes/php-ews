<?php
/**
 * Contains ArrayOfEncryptedSharedFolderDataType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of data structures that a client can use to authorize
 * the sharing of its calendar or contact data with other clients.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfEncryptedSharedFolderDataType extends EWSType
{
    /**
     * Contains the encrypted data that a client can use to authorize the
     * sharing of its calendar or contact data with other clients.
     *
     * @since Exchange 2010
     *
     * @var EncryptedSharedFolderDataType
     */
    public $EncryptedSharedFolderData;
}
