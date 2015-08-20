<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EncryptedSharedFolderDataType
 *
 *
 * XSD Type: EncryptedSharedFolderDataType
 *
 * @method EncryptedDataContainerType getToken()
 * @method EncryptedSharedFolderDataType setToken(EncryptedDataContainerType $token)
 * @method EncryptedDataContainerType getData()
 * @method EncryptedSharedFolderDataType setData(EncryptedDataContainerType $data)
 */
class EncryptedSharedFolderDataType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EncryptedDataContainerType
     */
    protected $token = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EncryptedDataContainerType
     */
    protected $data = null;
}
