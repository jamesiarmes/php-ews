<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing BaseObjectChangedEventType
 *
 *
 * XSD Type: BaseObjectChangedEventType
 *
 * @method BaseObjectChangedEventType getTimeStamp()
 * @method BaseObjectChangedEventType setTimeStamp(\DateTime $timeStamp)
 * @method BaseObjectChangedEventType getFolderId()
 * @method BaseObjectChangedEventType setFolderId(FolderIdType $folderId)
 * @method BaseObjectChangedEventType getItemId()
 * @method BaseObjectChangedEventType setItemId(ItemIdType $itemId)
 * @method BaseObjectChangedEventType getParentFolderId()
 * @method BaseObjectChangedEventType setParentFolderId(FolderIdType $parentFolderId)
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
     * @property \jamesiarmes\PEWS\API\Type\FolderIdType $folderId
     */
    protected $folderId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\FolderIdType $parentFolderId
     */
    protected $parentFolderId = null;


}

