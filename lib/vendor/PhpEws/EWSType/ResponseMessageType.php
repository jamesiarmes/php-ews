<?php
/**
 * Definition of the ResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the ResponseMessageType type
 */
class ResponseMessageType extends EWSType
{
    /**
     * MessageText property
     *
     * @var string
     */
    public $MessageText;

    /**
     * ResponseCode property
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;

    /**
     * DescriptiveLinkKey property
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * MessageXml property
     *
     * @var EWSType_MessageXml
     */
    public $MessageXml;

    /**
     * ResponseClass property
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;
}
