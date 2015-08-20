<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PullSubscriptionRequestType
 *
 *
 * XSD Type: PullSubscriptionRequestType
 *
 * @method integer getTimeout()
 * @method PullSubscriptionRequestType setTimeout(integer $timeout)
 */
class PullSubscriptionRequestType extends BaseSubscriptionRequestType
{

    /**
     * @var integer
     */
    protected $timeout = null;
}
