<?php
/**
 * Contains EWSType_ArrayOfFreeBusyResponse.
 */

/**
 * Represents the requested users' availability information and the response
 * status.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfFreeBusyResponse extends EWSType
{
    /**
     * Contains the free/busy information for a single mailbox user and the
     * response status.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FreeBusyResponseType
     */
    public $FreeBusyResponse;
}
