<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing FolderIdType
 *
 * Identifier for a fully resolved folder
 * XSD Type: FolderIdType
 *
 * @method FolderIdType getId()
 * @method FolderIdType setId(string $id)
 * @method FolderIdType getChangeKey()
 * @method FolderIdType setChangeKey(string $changeKey)
 */
class FolderIdType extends BaseFolderIdType
{

    /**
     * @property string $id
     */
    protected $id = null;

    /**
     * @property string $changeKey
     */
    protected $changeKey = null;


}

