<?php
/**
 * Contains FreeBusyResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the free/busy information for a single mailbox user.
 *
 * @package jamesiarmes\EWS\Types
 */
class FreeBusyResponseType extends EWSType
{
    /**
     * Contains availability information for a specific user.
     *
     * @since Exchange 2007
     *
     * @var FreeBusyView
     */
    public $FreeBusyView;

    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;
}
