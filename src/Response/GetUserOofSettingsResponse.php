<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetUserOofSettingsResponse.
 */

namespace jamesiarmes\PhpEws\Response;

use \jamesiarmes\PhpEws\Response;

/**
 * Represents the response message and the Out of Office (OOF) settings for a
 * user.
 *
 * @package php-ews\Response
 */
class GetUserOofSettingsResponse extends Response
{
    /**
     * Contains a value that identifies to whom external OOF messages are sent.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ExternalAudience
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
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType
     */
    public $ResponseMessage;
}
