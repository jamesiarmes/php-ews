<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the SerializedSecurityContextType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SerializedSecurityContextType type
 */
class SerializedSecurityContextType extends DataType
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
     * @var EWSType_NonEmptyArrayOfGroupIdentifiersType
     */
    public $GroupSids;

    /**
     * RestrictedGroupSids property
     *
     * @var EWSType_NonEmptyArrayOfRestrictedGroupIdentifiersType
     */
    public $RestrictedGroupSids;

    /**
     * PrimarySmtpAddress property
     *
     * @var string
     */
    public $PrimarySmtpAddress;
}
