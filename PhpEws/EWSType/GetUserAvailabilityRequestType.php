<?php
/**
 * Definition of the GetUserAvailabilityRequestType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetUserAvailabilityRequestType type
 */
class GetUserAvailabilityRequestType extends PhpEws\EWSType
{
    /**
     * TimeZone property
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * MailboxDataArray property
     *
     * @var ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * FreeBusyViewOptions property
     *
     * @var FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * SuggestionsViewOptions property
     *
     * @var SuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;
}
