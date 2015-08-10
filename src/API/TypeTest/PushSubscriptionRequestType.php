<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing PushSubscriptionRequestType
 *
 *
 * XSD Type: PushSubscriptionRequestType
 *
 * @method PushSubscriptionRequestType getStatusFrequency()
 * @method PushSubscriptionRequestType setStatusFrequency($statusFrequency)
 * @method PushSubscriptionRequestType getURL()
 * @method PushSubscriptionRequestType setURL($uRL)
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

