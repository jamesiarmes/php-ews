<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PushSubscriptionRequestType
 *
 *
 * XSD Type: PushSubscriptionRequestType
 *
 * @method PushSubscriptionRequestType getStatusFrequency()
 * @method PushSubscriptionRequestType setStatusFrequency(integer $statusFrequency)
 * @method PushSubscriptionRequestType getURL()
 * @method PushSubscriptionRequestType setURL(string $uRL)
 */
class PushSubscriptionRequestType extends BaseSubscriptionRequestType
{

    /**
     * @property integer $statusFrequency
     */
    protected $statusFrequency = null;

    /**
     * @property string $uRL
     */
    protected $uRL = null;


}

