<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EmailAddressDictionaryEntryType
 *
 *
 * XSD Type: EmailAddressDictionaryEntryType
 *
 * @method string getKey()
 * @method EmailAddressDictionaryEntryType setKey(string $key)
 * @method string getName()
 * @method EmailAddressDictionaryEntryType setName(string $name)
 * @method string getRoutingType()
 * @method EmailAddressDictionaryEntryType setRoutingType(string $routingType)
 * @method string getMailboxType()
 * @method EmailAddressDictionaryEntryType setMailboxType(string $mailboxType)
 */
class EmailAddressDictionaryEntryType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $routingType = null;

    /**
     * @var string
     */
    protected $mailboxType = null;
}
