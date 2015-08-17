<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class FieldOrderType extends TypeTest
{

    /**
     * @property string $order
     */
    protected $order = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FieldURI[] $fieldURI
     */
    protected $fieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\IndexedFieldURI[] $indexedFieldURI
     */
    protected $indexedFieldURI = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ExtendedFieldURI[] $extendedFieldURI
     */
    protected $extendedFieldURI = null;


}

