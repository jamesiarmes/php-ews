<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ResponseObjectCoreType
 *
 * Internal abstract base type for reply objects.
 *  Should not appear in client code
 * XSD Type: ResponseObjectCoreType
 *
 * @method ResponseObjectCoreType getReferenceItemId()
 * @method ResponseObjectCoreType setReferenceItemId(ItemIdType $referenceItemId)
 */
class ResponseObjectCoreType extends MessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $referenceItemId
     */
    protected $referenceItemId = null;
}
