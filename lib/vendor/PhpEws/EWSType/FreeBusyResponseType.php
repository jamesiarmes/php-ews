<?php
/**
 * Definition of the FreeBusyResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the FreeBusyResponseType type
 */
class EWSType_FreeBusyResponseType extends EWSType
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
