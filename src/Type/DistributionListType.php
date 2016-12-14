<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DistributionListType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a distribution list.
 *
 * @package php-ews\Type
 */
class DistributionListType extends ItemType
{
    /**
     * Describes whether the contact is located in the Exchange store or in
     * Active Directory Domain Services (AD DS).
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ContactSourceType
     */
    public $ContactSource;

    /**
     * Defines the display name of a distribution list.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Represents how a distribution list is filed in the Contacts folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FileAs;

    /**
     * Contains a list of members of the distribution list.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\MembersListType
     */
    public $Members;
}
