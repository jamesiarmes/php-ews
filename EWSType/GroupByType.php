<?php
/**
 * Definition of the GroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GroupByType type
 */
class EWSType_GroupByType extends EWSType
{
    /**
     * FieldURI property
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * IndexedFieldURI property
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * ExtendedFieldURI property
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;

    /**
     * AggregateOn property
     *
     * @var EWSType_AggregateOnType
     */
    public $AggregateOn;

    /**
     * Order property
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;
}
