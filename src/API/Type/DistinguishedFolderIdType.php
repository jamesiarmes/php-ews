<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing DistinguishedFolderIdType
 *
 * Identifier for a distinguished folder
 * XSD Type: DistinguishedFolderIdType
 *
 * @method string getId()
 * @method DistinguishedFolderIdType setId(string $id)
 * @method string getChangeKey()
 * @method DistinguishedFolderIdType setChangeKey(string $changeKey)
 * @method EmailAddressType getMailbox()
 * @method DistinguishedFolderIdType setMailbox(EmailAddressType $mailbox)
 */
class DistinguishedFolderIdType extends BaseFolderIdType
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $changeKey = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $mailbox = null;
}
