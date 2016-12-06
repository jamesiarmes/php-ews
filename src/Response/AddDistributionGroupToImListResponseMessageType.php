<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\AddDistributionGroupToImListResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response to a AddDistributionGroupToImList request.
 *
 * @package php-ews\Response
 */
class AddDistributionGroupToImListResponseMessageType extends ResponseMessageType
{
    /**
     * Represents an instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ImGroupType
     */
    public $ImGroup;
}
