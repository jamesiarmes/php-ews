<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderIdType
 *
 * Identifier for a fully resolved folder
 * XSD Type: FolderIdType
 *
 * @method string getId()
 * @method FolderIdType setId(string $id)
 * @method string getChangeKey()
 * @method FolderIdType setChangeKey(string $changeKey)
 */
class FolderIdType extends BaseFolderIdType
{

    /**
     * @var string
     */
    protected $id = null;

    /**
     * @var string
     */
    protected $changeKey = null;
}
