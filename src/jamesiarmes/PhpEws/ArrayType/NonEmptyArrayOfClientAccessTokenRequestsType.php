<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfClientAccessTokenRequestsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines an array of token requests.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfClientAccessTokenRequestsType extends ArrayType
{
    /**
     * Specifies a single token request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ClientAccessTokenRequestType
     */
    public $TokenRequest = array();
}
