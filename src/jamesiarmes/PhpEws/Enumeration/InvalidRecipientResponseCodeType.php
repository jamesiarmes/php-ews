<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\InvalidRecipientResponseCodeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Provides information about why a recipient is invalid.
 *
 * @package php-ews\Enumeration
 */
class InvalidRecipientResponseCodeType extends Enumeration
{
    /**
     * Indicates that there was a problem obtaining a security token from the
     * token server.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CANNOT_OBTAIN_TOKEN_FROM_STS = 'CannotObtainTokenFromSTS';

    /**
     * Indicates that the error is not specified by another error response code.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const OTHER = 'OtherError';

    /**
     * Indicates that the secure token service that is used by the specified
     * recipient is unknown.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RECIPIENT_ORG_FEDERATED_UNKNOWN_TOKEN_ISSUER = 'RecipientOrganizationFederatedWithUnknownTokenIssuer';

    /**
     * Indicates that a sharing relationship is not available with the
     * organization specified in the recipient's SMTP e-mail address.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RECIPIENT_ORG_NOT_FEDERATED = 'RecipientOrganizationNotFederated';

    /**
     * Indicates that the system administrator has set a system policy that
     * blocks sharing with the specified recipient.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SYSTEM_POLICY_BLOCKS_SHARING_WITH_RECIPIENT = 'SystemPolicyBlocksSharingWithThisRecipient';
}
