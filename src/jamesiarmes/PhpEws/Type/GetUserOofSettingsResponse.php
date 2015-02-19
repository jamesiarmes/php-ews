<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetUserOofSettingsResponse.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the response message and the Out of Office (OOF) settings for a
 * user.
 *
 * @package php-ews\Types
 */
class GetUserOofSettingsResponse extends Type
{
    /**
     * Contains a value that identifies to whom external OOF messages are sent.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Enumeration\ExternalAudience
     */
    public $AllowExternalOof;

    /**
     * Contains the OOF settings.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\UserOofSettings
     */
    public $OofSettings;

    /**
     * Provides descriptive information about the response status.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ResponseMessageType
     */
    public $ResponseMessage;
}
