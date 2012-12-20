<?php
/**
 * Definition of the FreeBusyResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the FreeBusyResponseType type
 */
class FreeBusyResponseType extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * FreeBusyView property
     *
     * @var EWSType_FreeBusyView
     */
    public $FreeBusyView;
}
