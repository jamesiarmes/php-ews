<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetPasswordExpirationDateResponseMessageType
 *
 *
 * XSD Type: GetPasswordExpirationDateResponseMessageType
 *
 * @method GetPasswordExpirationDateResponseMessageType getPasswordExpirationDate()
 * @method GetPasswordExpirationDateResponseMessageType setPasswordExpirationDate(\DateTime $passwordExpirationDate)
 */
class GetPasswordExpirationDateResponseMessageType extends ResponseMessageType
{

    /**
     * @property \DateTime $passwordExpirationDate
     */
    protected $passwordExpirationDate = null;

    protected $_typeMap = array(
        'passwordExpirationDate' => 'dateTime',
    );


}

