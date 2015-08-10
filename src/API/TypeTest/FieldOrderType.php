<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FieldOrderType
 *
 *
 * XSD Type: FieldOrderType
 *
 * @method FieldOrderType getOrder()
 * @method FieldOrderType setOrder($order)
 * @method FieldOrderType getFieldURI()
 * @method FieldOrderType setFieldURI($fieldURI)
 * @method FieldOrderType getIndexedFieldURI()
 * @method FieldOrderType setIndexedFieldURI($indexedFieldURI)
 * @method FieldOrderType getExtendedFieldURI()
 * @method FieldOrderType setExtendedFieldURI($extendedFieldURI)
 */
class FieldOrderType extends Type
{

    /**
     * @property string $order
     */
    protected $order = null;

    /**
     * @property array $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property array $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property array $extendedFieldURI
     */
    protected $extendedFieldURI = null;


}

