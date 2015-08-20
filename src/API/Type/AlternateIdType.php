<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AlternateIdType
 *
 * Represents an alternate mailbox folder or item Id.
 * XSD Type: AlternateIdType
 *
 * @method AlternateIdType getId()
 * @method AlternateIdType setId(string $id)
 * @method AlternateIdType getMailbox()
 * @method AlternateIdType setMailbox(string $mailbox)
 * @method AlternateIdType getIsArchive()
 * @method AlternateIdType setIsArchive(boolean $isArchive)
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
