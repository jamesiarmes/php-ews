<?php
/**
 * Contains ArrayOfMailTipsResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a list of mail tips response messages.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfMailTipsResponseMessageType extends EWSType
{
    /**
     * Represents mail tips settings.
     *
     * @since Exchange 2010
     *
     * @var MailTipsResponseMessageType
     */
    public $MailTipsResponseMessageType;
}
