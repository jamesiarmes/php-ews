<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetClientAccessTokenResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines a response message for a GetClientAccessToken request.
 *
 * @package php-ews\Response
 */
class GetClientAccessTokenResponseMessageType extends ResponseMessageType
{
    /**
     * Specifies a client access token.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ClientAccessTokenType
     */
    public $Token;
}
