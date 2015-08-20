<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AlternateIdType
 *
 * Represents an alternate mailbox folder or item Id.
 * XSD Type: AlternateIdType
 *
 * @method string getId()
 * @method AlternateIdType setId(string $id)
 * @method string getMailbox()
 * @method AlternateIdType setMailbox(string $mailbox)
 * @method boolean getIsArchive()
 * @method AlternateIdType setIsArchive(boolean $isArchive)
 */
class AlternateIdType extends AlternateIdBaseType
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $mailbox = null;

    /**
     * @var boolean
     */
    protected $isArchive = null;
}
