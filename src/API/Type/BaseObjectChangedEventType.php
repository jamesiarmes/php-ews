<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing BaseObjectChangedEventType
 *
 *
 * XSD Type: BaseObjectChangedEventType
 *
 * @method \DateTime getTimeStamp()
 * @method BaseObjectChangedEventType setTimeStamp(\DateTime $timeStamp)
 * @method FolderIdType getFolderId()
 * @method BaseObjectChangedEventType setFolderId(FolderIdType $folderId)
 * @method ItemIdType getItemId()
 * @method BaseObjectChangedEventType setItemId(ItemIdType $itemId)
 * @method FolderIdType getParentFolderId()
 * @method BaseObjectChangedEventType setParentFolderId(FolderIdType $parentFolderId)
 */
class BaseObjectChangedEventType extends BaseNotificationEventType
{

    /**
     * @var \DateTime
     */
    protected $timeStamp = null;

    protected $_typeMap = array(
        'timeStamp' => 'dateTime',
    );

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $folderId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $parentFolderId = null;
}
