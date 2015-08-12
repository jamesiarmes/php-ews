<?php
/**
 * Created by PhpStorm.
 * User: gareth
 * Date: 12-8-15
 * Time: 11:50
 */

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

class Message extends Type
{
    public function isAReply()
    {
        return ($this->exists('InReplyTo') && $this->InReplyTo !== null);
    }
}
