<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing PhoneCallInformationType
 *
 *
 * XSD Type: PhoneCallInformationType
 *
 * @method string getPhoneCallState()
 * @method PhoneCallInformationType setPhoneCallState(string $phoneCallState)
 * @method string getConnectionFailureCause()
 * @method PhoneCallInformationType setConnectionFailureCause(string $connectionFailureCause)
 * @method string getSIPResponseText()
 * @method PhoneCallInformationType setSIPResponseText(string $sIPResponseText)
 * @method integer getSIPResponseCode()
 * @method PhoneCallInformationType setSIPResponseCode(integer $sIPResponseCode)
 */
class PhoneCallInformationType extends Type
{

    /**
     * @var string
     */
    protected $phoneCallState = null;

    /**
     * @var string
     */
    protected $connectionFailureCause = null;

    /**
     * @var string
     */
    protected $sIPResponseText = null;

    /**
     * @var integer
     */
    protected $sIPResponseCode = null;
}
