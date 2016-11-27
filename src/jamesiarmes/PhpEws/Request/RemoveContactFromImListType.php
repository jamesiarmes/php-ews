<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\RemoveContactFromImListType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to remove an instant messaging contact from all instant
 * messaging groups.
 *
 * @package php-ews\Request
 */
class RemoveContactFromImListType extends BaseRequestType
{
    /**
     * Uniquely identifies a contact.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ContactId;
}
