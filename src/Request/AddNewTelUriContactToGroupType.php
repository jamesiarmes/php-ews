<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\AddNewTelUriContactToGroupType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to add a contact to a group based on the contacts phone
 * number.
 *
 * @package php-ews\Request
 */
class AddNewTelUriContactToGroupType extends BaseRequestType
{
    /**
     * Unique identifier of a group.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $GroupId;

    /**
     * Contains the SIP URI address of a contact that is added to an instant
     * messaging (IM) group.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ImContactSipUriAddress;

    /**
     * Represents the telephone number for a contact that is added to an instant
     * messaging (IM) group.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ImTelephoneNumber;

    /**
     * Contains the tel Uniform Resource Identifier (URI) for a contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $TelUriAddress;
}
