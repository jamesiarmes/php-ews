<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing EmailAddressType
 *
 * Identifier for a fully resolved email address
 * XSD Type: EmailAddressType
 *
 * @method string getName()
 * @method EmailAddressType setName(string $name)
 * @method string getEmailAddress()
 * @method EmailAddressType setEmailAddress(string $emailAddress)
 * @method string getRoutingType()
 * @method EmailAddressType setRoutingType(string $routingType)
 * @method string getMailboxType()
 * @method EmailAddressType setMailboxType(string $mailboxType)
 * @method ItemIdType getItemId()
 * @method EmailAddressType setItemId(ItemIdType $itemId)
 */
class EmailAddressType extends BaseEmailAddressType
{

    /**
     * @var string
     */
    protected $name = null;

    /**
     * @var string
     */
    protected $emailAddress = null;

    /**
     * @var string
     */
    protected $routingType = null;

    /**
     * @var string
     */
    protected $mailboxType = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;
}
