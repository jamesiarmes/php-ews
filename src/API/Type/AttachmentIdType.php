<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing AttachmentIdType
 *
 *
 * XSD Type: AttachmentIdType
 *
 * @method AttachmentIdType getRootItemId()
 * @method AttachmentIdType setRootItemId(string $rootItemId)
 * @method AttachmentIdType getRootItemChangeKey()
 * @method AttachmentIdType setRootItemChangeKey(string $rootItemChangeKey)
 */
class AttachmentIdType extends RequestAttachmentIdType
{

    /**
     * @property string $rootItemId
     */
    protected $rootItemId = null;

    /**
     * @property string $rootItemChangeKey
     */
    protected $rootItemChangeKey = null;
}
