<?php
/**
 * Contains SmartResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for smart responses that include new body content.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend SmartResponseBaseType.
 */
class SmartResponseType extends EWSType
{
    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var BodyType
     */
    public $NewBodyContent;
}
