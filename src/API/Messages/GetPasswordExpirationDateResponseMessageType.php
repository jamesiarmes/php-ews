<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetPasswordExpirationDateResponseMessageType
 *
 *
 * XSD Type: GetPasswordExpirationDateResponseMessageType
 *
 * @method GetPasswordExpirationDateResponseMessageType getPasswordExpirationDate()
 * @method GetPasswordExpirationDateResponseMessageType
 * setPasswordExpirationDate($passwordExpirationDate)
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

