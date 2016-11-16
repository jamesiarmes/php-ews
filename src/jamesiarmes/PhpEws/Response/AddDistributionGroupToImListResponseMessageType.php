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
     * @var \jamesiarmes\PhpEws\Type\ImGroupType
     *
     * @since Exchange 2013
     */
    public $ImGroup;
}
