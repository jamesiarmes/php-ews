<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ResponseObjectCoreType
 *
 * Internal abstract base type for reply objects.
 *  Should not appear in client code
 * XSD Type: ResponseObjectCoreType
 *
 * @method ItemIdType getReferenceItemId()
 * @method ResponseObjectCoreType setReferenceItemId(ItemIdType $referenceItemId)
 */
class ResponseObjectCoreType extends MessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $referenceItemId = null;
}
