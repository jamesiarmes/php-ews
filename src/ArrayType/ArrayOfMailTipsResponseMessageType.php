<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfMailTipsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a list of mail tips response messages.
 *
 * @package php-ews\Array
 */
class ArrayOfMailTipsResponseMessageType extends ArrayType
{
    /**
     * Represents mail tips settings.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\MailTipsResponseMessageType[]
     */
    public $MailTipsResponseMessageType = array();
}
