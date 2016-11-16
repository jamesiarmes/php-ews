<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ImGroupType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * {insert doc block}
 *
 * @package php-ews\Type
 */
class ImGroupType extends Type
{
    /**
     * Contains the display name of a new instant messaging group contact or
     * the display name of a new instant messaging group.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    public $DisplayName;

    /**
     * Specifies the instant messaging (IM) group identifier.
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     *
     * @since Exchange 2013
     */
    public $ExchangeStoreId;

    /**
     * Specifies an array of additional properties
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfExtendedPropertyType
     *
     * @since Exchange 2013
     */
    public $ExtendedProperties;

    /**
     * Specifies the group class of an instant messaging (IM) group.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    public $GroupType;

    /**
     * Specifies the identifiers of the contacts that are part of the instant
     * messaging (IM) group.
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemIdsType
     *
     * @since Exchange 2013
     */
    public $MemberCorrelationKey;

    /**
     * Represents the Simple Mail Transfer Protocol (SMTP) address of an account
     * to be used for impersonation or a Simple Mail Transfer Protocol (SMTP)
     * recipient address of a calendar or contact sharing request.
     *
     * @var string
     *
     * @since Exchange 2013
     */
    public $SmtpAddress;
}
