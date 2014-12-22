<?php
/**
 * Contains EWSType_FreeBusyResponseType.
 */

/**
 * Represents the free/busy information for a single mailbox user.
 *
 * @package php-ews\Types
 */
class EWSType_FreeBusyResponseType extends EWSType
{
    /**
     * Contains availability information for a specific user.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FreeBusyView
     */
    public $FreeBusyView;

    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;
}
