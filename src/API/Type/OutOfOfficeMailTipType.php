<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing OutOfOfficeMailTipType
 *
 *
 * XSD Type: OutOfOfficeMailTip
 *
 * @method ReplyBodyType getReplyBody()
 * @method OutOfOfficeMailTipType setReplyBody(ReplyBodyType $replyBody)
 * @method DurationType getDuration()
 * @method OutOfOfficeMailTipType setDuration(DurationType $duration)
 */
class OutOfOfficeMailTipType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ReplyBodyType
     */
    protected $replyBody = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DurationType
     */
    protected $duration = null;
}
