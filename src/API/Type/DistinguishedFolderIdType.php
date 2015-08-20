<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing DistinguishedFolderIdType
 *
 * Identifier for a distinguished folder
 * XSD Type: DistinguishedFolderIdType
 *
 * @method DistinguishedFolderIdType getId()
 * @method DistinguishedFolderIdType setId(string $id)
 * @method DistinguishedFolderIdType getChangeKey()
 * @method DistinguishedFolderIdType setChangeKey(string $changeKey)
 * @method DistinguishedFolderIdType getMailbox()
 * @method DistinguishedFolderIdType setMailbox(EmailAddressType $mailbox)
 */
class DistinguishedFolderIdType extends BaseFolderIdType
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property string $changeKey
     */
    protected $changeKey = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $mailbox
     */
    protected $mailbox = null;
}
