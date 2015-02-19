<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SetUserOofSettingsResponse.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines the result of a SetUserOofSettingsRequest message attempt.
 *
 * @package php-ews\Types
 */
class SetUserOofSettingsResponse extends Type
{
    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ResponseMessageType
     */
    public $ResponseMessage;
}
