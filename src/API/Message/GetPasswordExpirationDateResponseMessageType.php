<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetPasswordExpirationDateResponseMessageType
 *
 *
 * XSD Type: GetPasswordExpirationDateResponseMessageType
 *
 * @method \DateTime getPasswordExpirationDate()
 * @method GetPasswordExpirationDateResponseMessageType setPasswordExpirationDate(\DateTime $passwordExpirationDate)
 */
class GetPasswordExpirationDateResponseMessageType extends ResponseMessageType
{

    /**
     * @var \DateTime
     */
    protected $passwordExpirationDate = null;

    protected $_typeMap = array(
        'passwordExpirationDate' => 'dateTime',
    );
}
