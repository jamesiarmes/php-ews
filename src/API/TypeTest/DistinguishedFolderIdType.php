<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing DistinguishedFolderIdType
 *
 * Identifier for a distinguished folder
 * XSD Type: DistinguishedFolderIdType
 *
 * @method DistinguishedFolderIdType getId()
 * @method DistinguishedFolderIdType setId($id)
 * @method DistinguishedFolderIdType getChangeKey()
 * @method DistinguishedFolderIdType setChangeKey($changeKey)
 * @method DistinguishedFolderIdType getMailbox()
 * @method DistinguishedFolderIdType setMailbox($mailbox)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $mailbox
     */
    protected $mailbox = null;


}

