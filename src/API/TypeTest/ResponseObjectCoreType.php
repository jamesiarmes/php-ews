<?php

namespace jamesiarmes\PEWS\API\TypeTest;

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
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $referenceItemId
     */
    protected $referenceItemId = null;


}

