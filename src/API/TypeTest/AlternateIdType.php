<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing AlternateIdType
 *
 * Represents an alternate mailbox folder or item Id.
 * XSD Type: AlternateIdType
 *
 * @method AlternateIdType getId()
 * @method AlternateIdType setId($id)
 * @method AlternateIdType getMailbox()
 * @method AlternateIdType setMailbox($mailbox)
 * @method AlternateIdType getIsArchive()
 * @method AlternateIdType setIsArchive($isArchive)
 */
class AlternateIdType extends AlternateIdBaseType
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property string $mailbox
     */
    protected $mailbox = null;

    /**
     * @property boolean $isArchive
     */
    protected $isArchive = null;


}

