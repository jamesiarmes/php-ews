<?php

namespace jamesiarmes\PEWS\API;

class Message extends Type
{
    public function getNonNullResponseMessages()
    {
        return $this->getNonNullItems();
    }
}
