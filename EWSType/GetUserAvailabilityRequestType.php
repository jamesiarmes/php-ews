<?php
/**
 * Definition of the GetUserAvailabilityRequestType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetUserAvailabilityRequestType type
 */
class EWSType_GetUserAvailabilityRequestType extends EWSType
{
    /**
     * TimeZone property
     *
     * @var EWSType_SerializableTimeZone
     */
    public $TimeZone;

    /**
     * MailboxDataArray property
     *
     * @var EWSType_ArrayOfMailboxData
     */
    public $MailboxDataArray;

    /**
     * FreeBusyViewOptions property
     *
     * @var EWSType_FreeBusyViewOptionsType
     */
    public $FreeBusyViewOptions;

    /**
     * SuggestionsViewOptions property
     *
     * @var EWSType_SuggestionsViewOptionsType
     */
    public $SuggestionsViewOptions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'TimeZone',
                'required' => false,
                'type' => 'SerializableTimeZone',
            ),
            array(
                'name' => 'MailboxDataArray',
                'required' => false,
                'type' => 'ArrayOfMailboxData',
            ),
            array(
                'name' => 'FreeBusyViewOptions',
                'required' => false,
                'type' => 'FreeBusyViewOptionsType',
            ),
            array(
                'name' => 'SuggestionsViewOptions',
                'required' => false,
                'type' => 'SuggestionsViewOptionsType',
            ),
        );
    }
}
