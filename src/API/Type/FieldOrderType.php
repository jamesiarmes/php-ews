<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FieldOrderType
 *
 *
 * XSD Type: FieldOrderType
 *
 * @method FieldOrderType getOrder()
 * @method FieldOrderType setOrder(string $order)
 * @method FieldOrderType getFieldURI()
 * @method FieldOrderType setFieldURI(array $fieldURI)
 * @method FieldOrderType getIndexedFieldURI()
 * @method FieldOrderType setIndexedFieldURI(array $indexedFieldURI)
 * @method FieldOrderType getExtendedFieldURI()
 * @method FieldOrderType setExtendedFieldURI(array $extendedFieldURI)
 */
class FieldOrderType extends Type
{

    /**
     * @property string $order
     */
    protected $order = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FieldURI[] $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\IndexedFieldURI[] $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ExtendedFieldURI[] $extendedFieldURI
     */
    protected $extendedFieldURI = null;
}
