<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EncryptedSharedFolderDataType
 *
 *
 * XSD Type: EncryptedSharedFolderDataType
 *
 * @method EncryptedSharedFolderDataType getToken()
 * @method EncryptedSharedFolderDataType setToken(EncryptedDataContainerType $token)
 * @method EncryptedSharedFolderDataType getData()
 * @method EncryptedSharedFolderDataType setData(EncryptedDataContainerType $data)
 */
class EncryptedSharedFolderDataType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\EncryptedDataContainerType $token
     */
    protected $token = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EncryptedDataContainerType $data
     */
    protected $data = null;


}

