<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the ResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ResponseMessageType type
 */
class ResponseMessageType extends DataType
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
