<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ReplyBodyType
 *
 *
 * XSD Type: ReplyBody
 *
 * @method \jamesiarmes\PEWS\API\Type\ReplyBodyType\LangAType getLang()
 * @method ReplyBodyType setLang(\jamesiarmes\PEWS\API\Type\ReplyBodyType\LangAType $lang)
 * @method string getMessage()
 * @method ReplyBodyType setMessage(string $message)
 */
class ReplyBodyType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ReplyBodyType\LangAType
     */
    protected $lang = null;

    /**
     * @var string
     */
    protected $message = null;
}
