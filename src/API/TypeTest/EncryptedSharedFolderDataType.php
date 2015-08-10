<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing EncryptedSharedFolderDataType
 *
 *
 * XSD Type: EncryptedSharedFolderDataType
 *
 * @method EncryptedSharedFolderDataType getToken()
 * @method EncryptedSharedFolderDataType setToken($token)
 * @method EncryptedSharedFolderDataType getData()
 * @method EncryptedSharedFolderDataType setData($data)
 */
class EncryptedSharedFolderDataType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EncryptedDataContainerType $token
     */
    protected $token = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EncryptedDataContainerType $data
     */
    protected $data = null;


}

