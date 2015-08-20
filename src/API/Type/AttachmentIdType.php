<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AttachmentIdType
 *
 *
 * XSD Type: AttachmentIdType
 *
 * @method string getRootItemId()
 * @method AttachmentIdType setRootItemId(string $rootItemId)
 * @method string getRootItemChangeKey()
 * @method AttachmentIdType setRootItemChangeKey(string $rootItemChangeKey)
 */
class AttachmentIdType extends RequestAttachmentIdType
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
