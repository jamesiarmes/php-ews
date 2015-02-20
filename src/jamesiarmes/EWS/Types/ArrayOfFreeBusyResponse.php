<?php
/**
 * Contains ArrayOfFreeBusyResponse.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the requested users' availability information and the response
 * status.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfFreeBusyResponse extends EWSType
{
    /**
     * Contains the free/busy information for a single mailbox user and the
     * response status.
     *
     * @since Exchange 2007
     *
     * @var FreeBusyResponseType
     */
    public $FreeBusyResponse;
}
