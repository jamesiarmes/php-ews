<?php
/**
 * Definition of the SerializedSecurityContextType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the SerializedSecurityContextType type
 */
class SerializedSecurityContextType extends PhpEws\EWSType
{
    /**
     * UserSid property
     *
     * @var string
     */
    public $UserSid;

    /**
     * GroupSids property
     *
     * @var NonEmptyArrayOfGroupIdentifiersType
     */
    public $GroupSids;

    /**
     * RestrictedGroupSids property
     *
     * @var NonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public $RestrictedGroupSids;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;
}
