<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ItemType
 *
 *
 * XSD Type: ItemType
 *
 * @method MimeContentType getMimeContent()
 * @method ItemType setMimeContent(MimeContentType $mimeContent)
 * @method ItemIdType getItemId()
 * @method ItemType setItemId(ItemIdType $itemId)
 * @method FolderIdType getParentFolderId()
 * @method ItemType setParentFolderId(FolderIdType $parentFolderId)
 * @method string getItemClass()
 * @method ItemType setItemClass(string $itemClass)
 * @method string getSubject()
 * @method ItemType setSubject(string $subject)
 * @method string getSensitivity()
 * @method ItemType setSensitivity(string $sensitivity)
 * @method BodyType getBody()
 * @method ItemType setBody(BodyType $body)
 * @method NonEmptyArrayOfAttachmentsType getAttachments()
 * @method ItemType setAttachments(NonEmptyArrayOfAttachmentsType $attachments)
 * @method \DateTime getDateTimeReceived()
 * @method ItemType setDateTimeReceived(\DateTime $dateTimeReceived)
 * @method integer getSize()
 * @method ItemType setSize(integer $size)
 * @method array getCategories()
 * @method ItemType setCategories(array $categories)
 * @method string getImportance()
 * @method ItemType setImportance(string $importance)
 * @method string getInReplyTo()
 * @method ItemType setInReplyTo(string $inReplyTo)
 * @method boolean getIsSubmitted()
 * @method ItemType setIsSubmitted(boolean $isSubmitted)
 * @method boolean getIsDraft()
 * @method ItemType setIsDraft(boolean $isDraft)
 * @method boolean getIsFromMe()
 * @method ItemType setIsFromMe(boolean $isFromMe)
 * @method boolean getIsResend()
 * @method ItemType setIsResend(boolean $isResend)
 * @method boolean getIsUnmodified()
 * @method ItemType setIsUnmodified(boolean $isUnmodified)
 * @method array getInternetMessageHeaders()
 * @method ItemType setInternetMessageHeaders(array $internetMessageHeaders)
 * @method \DateTime getDateTimeSent()
 * @method ItemType setDateTimeSent(\DateTime $dateTimeSent)
 * @method \DateTime getDateTimeCreated()
 * @method ItemType setDateTimeCreated(\DateTime $dateTimeCreated)
 * @method NonEmptyArrayOfResponseObjectsType getResponseObjects()
 * @method ItemType setResponseObjects(NonEmptyArrayOfResponseObjectsType $responseObjects)
 * @method \DateTime getReminderDueBy()
 * @method ItemType setReminderDueBy(\DateTime $reminderDueBy)
 * @method boolean getReminderIsSet()
 * @method ItemType setReminderIsSet(boolean $reminderIsSet)
 * @method integer getReminderMinutesBeforeStart()
 * @method ItemType setReminderMinutesBeforeStart(integer $reminderMinutesBeforeStart)
 * @method string getDisplayCc()
 * @method ItemType setDisplayCc(string $displayCc)
 * @method string getDisplayTo()
 * @method ItemType setDisplayTo(string $displayTo)
 * @method boolean getHasAttachments()
 * @method ItemType setHasAttachments(boolean $hasAttachments)
 * @method array getExtendedProperty()
 * @method ItemType setExtendedProperty(array $extendedProperty)
 * @method string getCulture()
 * @method ItemType setCulture(string $culture)
 * @method EffectiveRightsType getEffectiveRights()
 * @method ItemType setEffectiveRights(EffectiveRightsType $effectiveRights)
 * @method string getLastModifiedName()
 * @method ItemType setLastModifiedName(string $lastModifiedName)
 * @method \DateTime getLastModifiedTime()
 * @method ItemType setLastModifiedTime(\DateTime $lastModifiedTime)
 * @method boolean getIsAssociated()
 * @method ItemType setIsAssociated(boolean $isAssociated)
 * @method string getWebClientReadFormQueryString()
 * @method ItemType setWebClientReadFormQueryString(string $webClientReadFormQueryString)
 * @method string getWebClientEditFormQueryString()
 * @method ItemType setWebClientEditFormQueryString(string $webClientEditFormQueryString)
 * @method ItemIdType getConversationId()
 * @method ItemType setConversationId(ItemIdType $conversationId)
 * @method BodyType getUniqueBody()
 * @method ItemType setUniqueBody(BodyType $uniqueBody)
 * @method string getStoreEntryId()
 * @method ItemType setStoreEntryId(string $storeEntryId)
 */
class ItemType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\MimeContentType
     */
    protected $mimeContent = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $itemId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FolderIdType
     */
    protected $parentFolderId = null;

    /**
     * @var string
     */
    protected $itemClass = null;

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var string
     */
    protected $sensitivity = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\BodyType
     */
    protected $body = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAttachmentsType
     */
    protected $attachments = null;

    /**
     * @var \DateTime
     */
    protected $dateTimeReceived = null;

    protected $_typeMap = array(
        'dateTimeReceived' => 'dateTime',
        'dateTimeSent' => 'dateTime',
        'dateTimeCreated' => 'dateTime',
        'reminderDueBy' => 'dateTime',
        'lastModifiedTime' => 'dateTime',
    );

    /**
     * @var integer
     */
    protected $size = null;

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var string
     */
    protected $importance = null;

    /**
     * @var string
     */
    protected $inReplyTo = null;

    /**
     * @var boolean
     */
    protected $isSubmitted = null;

    /**
     * @var boolean
     */
    protected $isDraft = null;

    /**
     * @var boolean
     */
    protected $isFromMe = null;

    /**
     * @var boolean
     */
    protected $isResend = null;

    /**
     * @var boolean
     */
    protected $isUnmodified = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\InternetHeaderType[]
     */
    protected $internetMessageHeaders = null;

    /**
     * @var \DateTime
     */
    protected $dateTimeSent = null;

    /**
     * @var \DateTime
     */
    protected $dateTimeCreated = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfResponseObjectsType
     */
    protected $responseObjects = null;

    /**
     * @var \DateTime
     */
    protected $reminderDueBy = null;

    /**
     * @var boolean
     */
    protected $reminderIsSet = null;

    /**
     * @var integer
     */
    protected $reminderMinutesBeforeStart = null;

    /**
     * @var string
     */
    protected $displayCc = null;

    /**
     * @var string
     */
    protected $displayTo = null;

    /**
     * @var boolean
     */
    protected $hasAttachments = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ExtendedPropertyType[]
     */
    protected $extendedProperty = null;

    /**
     * @var string
     */
    protected $culture = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EffectiveRightsType
     */
    protected $effectiveRights = null;

    /**
     * @var string
     */
    protected $lastModifiedName = null;

    /**
     * @var \DateTime
     */
    protected $lastModifiedTime = null;

    /**
     * @var boolean
     */
    protected $isAssociated = null;

    /**
     * @var string
     */
    protected $webClientReadFormQueryString = null;

    /**
     * @var string
     */
    protected $webClientEditFormQueryString = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $conversationId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\BodyType
     */
    protected $uniqueBody = null;

    /**
     * @var string
     */
    protected $storeEntryId = null;
}
