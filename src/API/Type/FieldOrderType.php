<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FieldOrderType
 *
 *
 * XSD Type: FieldOrderType
 *
 * @method string getOrder()
 * @method FieldOrderType setOrder(string $order)
 * @method array getFieldURI()
 * @method FieldOrderType setFieldURI(array $fieldURI)
 * @method array getIndexedFieldURI()
 * @method FieldOrderType setIndexedFieldURI(array $indexedFieldURI)
 * @method array getExtendedFieldURI()
 * @method FieldOrderType setExtendedFieldURI(array $extendedFieldURI)
 */
class FieldOrderType extends Type
{

    /**
     * @var string
     */
    protected $order = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FieldURI[]
     */
    protected $fieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\IndexedFieldURI[]
     */
    protected $indexedFieldURI = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ExtendedFieldURI[]
     */
    protected $extendedFieldURI = null;
}
