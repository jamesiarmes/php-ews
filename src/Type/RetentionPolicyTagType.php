<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RetentionPolicyTagType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the retention policy for a mailbox item.
 *
 * @package php-ews\Type
 */
class RetentionPolicyTagType extends Type
{
    /**
     * Specifies the descriptive text for the retention policy.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Description;

    /**
     * Defines the display name of the retention policy tag.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Indicates whether the mailbox is an archive mailbox.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IsArchive;

    /**
     * Indicates whether the retention policy is visible to users.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $IsVisible;

    /**
     * Indicates whether the user opted in to the retention policy.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $OptedInto;

    /**
     * Specifies the action performed on items with the retention tag.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\RetentionActionType
     */
    public $RetentionAction;

    /**
     * Specifies the retention tag identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $RetentionId;

    /**
     * Specifies the number of days that the retention policy is in effect.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $RetentionPeriod;

    /**
     * Specifies the type of folder used in a retention policy.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ElcFolderType
     */
    public $Type;
}
