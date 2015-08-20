<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing OutOfOfficeMailTipType
 *
 *
 * XSD Type: OutOfOfficeMailTip
 *
 * @method OutOfOfficeMailTipType getReplyBody()
 * @method OutOfOfficeMailTipType setReplyBody(ReplyBodyType $replyBody)
 * @method OutOfOfficeMailTipType getDuration()
 * @method OutOfOfficeMailTipType setDuration(DurationType $duration)
 */
class OutOfOfficeMailTipType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyBodyType $replyBody
     */
    protected $replyBody = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DurationType $duration
     */
    protected $duration = null;
}
