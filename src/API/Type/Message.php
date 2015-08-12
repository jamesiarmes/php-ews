<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

class Message extends Type
{
    public function isAReply()
    {
        return ($this->exists('InReplyTo') && $this->InReplyTo !== null);
    }
}
