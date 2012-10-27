<?php
/**
 * Contains EWSType_InvalidRecipientResponseCodeType.
 */

/**
 * Provides information about why a recipient is invalid.
 *
 * @package php-ews\Enumerations
 */
class EWSType_InvalidRecipientResponseCodeType extends EWSType
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

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
