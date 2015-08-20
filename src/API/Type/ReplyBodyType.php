<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ReplyBodyType
 *
 *
 * XSD Type: ReplyBody
 *
 * @method ReplyBodyType getLang()
 * @method ReplyBodyType setLang(\jamesiarmes\PEWS\API\Type\ReplyBodyType\LangAType $lang)
 * @method ReplyBodyType getMessage()
 * @method ReplyBodyType setMessage(string $message)
 */
class ReplyBodyType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ReplyBodyType\LangAType $lang
     */
    protected $lang = null;

    /**
     * @property string $message
     */
    protected $message = null;


}

