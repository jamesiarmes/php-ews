<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ResponseObjectType
 *
 * Abstract base type for reply objects
 * XSD Type: ResponseObjectType
 *
 * @method ResponseObjectType getObjectName()
 * @method ResponseObjectType setObjectName(string $objectName)
 */
class ResponseObjectType extends ResponseObjectCoreType
{

    /**
     * The name of this reply object class as an English string. The client
     *  application is required to translate it if it's running in a different locale
     *
     * @property string $objectName
     */
    protected $objectName = null;
}
