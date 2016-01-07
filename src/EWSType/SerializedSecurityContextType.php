<?php
/**
 * Contains EWSType_SerializedSecurityContextType.
 */

/**
 * Defines token serialization in server-to-server authentication.
 *
 * @package php-ews\Types
 */
class EWSType_SerializedSecurityContextType extends EWSType
{
    /**
     * Represents a collection of Active Directory directory service group
     * object security identifiers.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfGroupIdentifiersType
     */
    public $GroupSids;

    /**
     * Represents the primary Simple Mail Transfer Protocol (SMTP) address of an
     * account to be used for server-to-server authorization.
     *
     * @var string
     */
    public $PrimarySmtpAddress;

    /**
     * Represents the group security identifier and attributes for a restricted
     * group.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public $RestrictedGroupSids;

    /**
     * Represents the security descriptor definition language (SDDL) form of the
     * user security identifier in a serialized security context SOAP header.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $UserSid;
}
