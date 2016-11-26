<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetImItemsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * {insert doc block}
 *
 * @package php-ews\Request
 */
class GetImItemsType extends BaseRequestType
{
    /**
     * Contains an array of contact item identifiers.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $ContactIds;

    /**
     * Identifies an array of instant messaging group identifiers.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType
     */
    public $GroupIds;

    /**
     * Contains the extended properties used for the Unified Contact Store
     * operations.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfExtendedFieldURIs
     */
    public $ExtendedProperties;
}
