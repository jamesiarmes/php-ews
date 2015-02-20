<?php
/**
 * Contains SerializedSecurityContextType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines token serialization in server-to-server authentication.
 *
 * @package jamesiarmes\EWS\Types
 */
class SerializedSecurityContextType extends EWSType
{
    /**
     * Represents a collection of Active Directory directory service group
     * object security identifiers.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfGroupIdentifiersType
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
     * @var NonEmptyArrayOfRestrictedGroupIdentifiersType
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
