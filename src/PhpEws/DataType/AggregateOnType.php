<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the AggregateOnType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AggregateOnType type
 */
class AggregateOnType extends DataType
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
     * Aggregate property
     *
     * @var EWSType_AggregateType
     */
    public $Aggregate;
}
