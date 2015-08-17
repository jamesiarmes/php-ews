<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing BaseObjectChangedEventType
 *
 *
 * XSD Type: BaseObjectChangedEventType
 *
 * @method BaseObjectChangedEventType getTimeStamp()
 * @method BaseObjectChangedEventType setTimeStamp($timeStamp)
 * @method BaseObjectChangedEventType getFolderId()
 * @method BaseObjectChangedEventType setFolderId($folderId)
 * @method BaseObjectChangedEventType getItemId()
 * @method BaseObjectChangedEventType setItemId($itemId)
 * @method BaseObjectChangedEventType getParentFolderId()
 * @method BaseObjectChangedEventType setParentFolderId($parentFolderId)
 */
class BaseObjectChangedEventType extends BaseNotificationEventType
{

    /**
     * @property \DateTime $timeStamp
     */
    protected $timeStamp = null;

    protected $_typeMap = array(
        'timeStamp' => 'dateTime',
    );

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $parentFolderId
     */
    protected $parentFolderId = null;


}

