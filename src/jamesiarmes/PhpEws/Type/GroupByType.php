<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GroupByType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines an arbitrary grouping for FindItem queries.
 *
 * @package php-ews\Type
 */
class GroupByType extends BaseGroupByType
{
    /**
     * Represents the field that is used to determine the order of groups in a
     * response.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\AggregateOnType
     */
    public $AggregateOn;

    /**
     * Identifies extended MAPI properties to get, set, or create.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * Identifies frequently referenced properties by URI.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PathToIndexedFieldType
     */
    public $IndexedFieldURI;
}
