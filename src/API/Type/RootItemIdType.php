<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing RootItemIdType
 *
 *
 * XSD Type: RootItemIdType
 *
 * @method string getRootItemId()
 * @method RootItemIdType setRootItemId(string $rootItemId)
 * @method string getRootItemChangeKey()
 * @method RootItemIdType setRootItemChangeKey(string $rootItemChangeKey)
 */
class RootItemIdType extends BaseItemIdType
{

    /**
     * @var string
     */
    protected $rootItemId = null;

    /**
     * @var string
     */
    protected $rootItemChangeKey = null;
}
