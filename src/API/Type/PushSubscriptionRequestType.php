<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PushSubscriptionRequestType
 *
 *
 * XSD Type: PushSubscriptionRequestType
 *
 * @method integer getStatusFrequency()
 * @method PushSubscriptionRequestType setStatusFrequency(integer $statusFrequency)
 * @method string getURL()
 * @method PushSubscriptionRequestType setURL(string $uRL)
 */
class PushSubscriptionRequestType extends BaseSubscriptionRequestType
{

    /**
     * @var integer
     */
    protected $statusFrequency = null;

    /**
     * @var string
     */
    protected $uRL = null;
}
