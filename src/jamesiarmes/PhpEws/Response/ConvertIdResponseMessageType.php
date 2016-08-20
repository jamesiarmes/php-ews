<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\ConvertIdResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a ConvertId operation request.
 *
 * @package php-ews\Response
 */
class ConvertIdResponseMessageType extends ResponseMessageType
{
    /**
     * Describes a converted identifier in the response.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\AlternateIdType
     */
    public $AlternateId;
}
