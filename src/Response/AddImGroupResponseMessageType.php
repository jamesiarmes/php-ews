<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\AddImGroupResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response to an AddImGroup request.
 *
 * @package php-ews\Response
 */
class AddImGroupResponseMessageType extends ResponseMessageType
{
    /**
     * Represents the new instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ImGroupType
     */
    public $ImGroup;
}
