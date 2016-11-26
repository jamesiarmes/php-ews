<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetNonIndexableItemDetailsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a GetNonIndexableItemDetails request.
 *
 * @package php-ews\Response
 */
class GetNonIndexableItemDetailsResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies the results of the GetNonIndexableItemDetails request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\NonIndexableItemDetailResultType
     */
    public $NonIndexableItemDetailsResult;
}
