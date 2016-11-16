<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\AddImContactToGroup.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to add an existing instant messaging contact to an instant
 * messaging group.
 *
 * @package php-ews\Request
 */
class AddImContactToGroup extends BaseRequestType
{
    /**
     * Uniquely identifies a contact.
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     *
     * @since Exchange 2013
     */
    public $ContactId;

    /**
     * Uniquely identifies a group.
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     *
     * @since Exchange 2013
     */
    public $GroupId;
}
