<?php
/**
 * Contains EWSType_SmartResponseType.
 */

/**
 * Base class for smart responses that include new body content.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_SmartResponseBaseType.
 */
class EWSType_SmartResponseType extends EWSType
{
    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BodyType
     */
    public $NewBodyContent;
}
