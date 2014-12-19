<?php
/**
 * Contains EWSType_GetServiceConfigurationType.
 */

/**
 * Defines a GetServiceConfiguration request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetServiceConfigurationType extends EWSType
{
    /**
     * Identifies who the caller is sending as.
     *
     * This element is optional.
     *
     * If this element is not present, the authenticated user is assumed to be
     * the sender. The ActingAs element must be included for requesting sender
     * hints. An ErrorInvalidArgument error can be returned in a response if the
     * ActingAs element is missing, does not include a routing type, does not
     * include an e-mail address, contains an invalid e-mail address, does not
     * resolve to a user in Active Directory Domain Services (AD DS), or
     * resolves to multiple users in AD DS.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
     */
    public $ActingAs;

    /**
     * Contains the requested service configurations.
     *
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfServiceConfigurationType
     */
    public $RequestedConfiguration;
}
