<?php

namespace jamesiarmes\PEWS\API;

class Messages extends Type
{
    public function getNonNullResponseMessages()
    {
        $messages = get_object_vars($this);

        foreach ($messages as $key => $message) {
            if (substr($key, 0, 1) == "_" || $message == null) {
                unset($messages[$key]);
            }
        }

        return $messages;
    }
}
