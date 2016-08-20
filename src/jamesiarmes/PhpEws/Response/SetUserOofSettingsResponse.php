<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\SetUserOofSettingsResponse.
 */

namespace jamesiarmes\PhpEws\Response;

use \jamesiarmes\PhpEws\Response;

/**
 * Defines the result of a SetUserOofSettingsRequest message attempt.
 *
 * @package php-ews\Response
 */
class SetUserOofSettingsResponse extends Response
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType
     */
    public $ResponseMessage;
}
