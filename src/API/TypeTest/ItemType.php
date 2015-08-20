<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ItemType
 *
 *
 * XSD Type: ItemType
 *
 * @method ItemType getMimeContent()
 * @method ItemType setMimeContent(MimeContentType $mimeContent)
 * @method ItemType getItemId()
 * @method ItemType setItemId(ItemIdType $itemId)
 * @method ItemType getParentFolderId()
 * @method ItemType setParentFolderId(FolderIdType $parentFolderId)
 * @method ItemType getItemClass()
 * @method ItemType setItemClass(string $itemClass)
 * @method ItemType getSubject()
 * @method ItemType setSubject(string $subject)
 * @method ItemType getSensitivity()
 * @method ItemType setSensitivity(string $sensitivity)
 * @method ItemType getBody()
 * @method ItemType setBody(BodyType $body)
 * @method ItemType getAttachments()
 * @method ItemType setAttachments(NonEmptyArrayOfAttachmentsType $attachments)
 * @method ItemType getDateTimeReceived()
 * @method ItemType setDateTimeReceived(\DateTime $dateTimeReceived)
 * @method ItemType getSize()
 * @method ItemType setSize(integer $size)
 * @method ItemType getCategories()
 * @method ItemType setCategories(array $categories)
 * @method ItemType getImportance()
 * @method ItemType setImportance(string $importance)
 * @method ItemType getInReplyTo()
 * @method ItemType setInReplyTo(string $inReplyTo)
 * @method ItemType getIsSubmitted()
 * @method ItemType setIsSubmitted(boolean $isSubmitted)
 * @method ItemType getIsDraft()
 * @method ItemType setIsDraft(boolean $isDraft)
 * @method ItemType getIsFromMe()
 * @method ItemType setIsFromMe(boolean $isFromMe)
 * @method ItemType getIsResend()
 * @method ItemType setIsResend(boolean $isResend)
 * @method ItemType getIsUnmodified()
 * @method ItemType setIsUnmodified(boolean $isUnmodified)
 * @method ItemType getInternetMessageHeaders()
 * @method ItemType setInternetMessageHeaders(array $internetMessageHeaders)
 * @method ItemType getDateTimeSent()
 * @method ItemType setDateTimeSent(\DateTime $dateTimeSent)
 * @method ItemType getDateTimeCreated()
 * @method ItemType setDateTimeCreated(\DateTime $dateTimeCreated)
 * @method ItemType getResponseObjects()
 * @method ItemType setResponseObjects(NonEmptyArrayOfResponseObjectsType $responseObjects)
 * @method ItemType getReminderDueBy()
 * @method ItemType setReminderDueBy(\DateTime $reminderDueBy)
 * @method ItemType getReminderIsSet()
 * @method ItemType setReminderIsSet(boolean $reminderIsSet)
 * @method ItemType getReminderMinutesBeforeStart()
 * @method ItemType setReminderMinutesBeforeStart(integer $reminderMinutesBeforeStart)
 * @method ItemType getDisplayCc()
 * @method ItemType setDisplayCc(string $displayCc)
 * @method ItemType getDisplayTo()
 * @method ItemType setDisplayTo(string $displayTo)
 * @method ItemType getHasAttachments()
 * @method ItemType setHasAttachments(boolean $hasAttachments)
 * @method ItemType getExtendedProperty()
 * @method ItemType setExtendedProperty(array $extendedProperty)
 * @method ItemType getCulture()
 * @method ItemType setCulture(string $culture)
 * @method ItemType getEffectiveRights()
 * @method ItemType setEffectiveRights(EffectiveRightsType $effectiveRights)
 * @method ItemType getLastModifiedName()
 * @method ItemType setLastModifiedName(string $lastModifiedName)
 * @method ItemType getLastModifiedTime()
 * @method ItemType setLastModifiedTime(\DateTime $lastModifiedTime)
 * @method ItemType getIsAssociated()
 * @method ItemType setIsAssociated(boolean $isAssociated)
 * @method ItemType getWebClientReadFormQueryString()
 * @method ItemType setWebClientReadFormQueryString(string $webClientReadFormQueryString)
 * @method ItemType getWebClientEditFormQueryString()
 * @method ItemType setWebClientEditFormQueryString(string $webClientEditFormQueryString)
 * @method ItemType getConversationId()
 * @method ItemType setConversationId(ItemIdType $conversationId)
 * @method ItemType getUniqueBody()
 * @method ItemType setUniqueBody(BodyType $uniqueBody)
 * @method ItemType getStoreEntryId()
 * @method ItemType setStoreEntryId(string $storeEntryId)
 */
class ItemType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MimeContentType $mimeContent
     */
    protected $mimeContent = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $itemId
     */
    protected $itemId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FolderIdType $parentFolderId
     */
    protected $parentFolderId = null;

    /**
     * @property string $itemClass
     */
    protected $itemClass = null;

    /**
     * @property string $subject
     */
    protected $subject = null;

    /**
     * @property string $sensitivity
     */
    protected $sensitivity = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\BodyType $body
     */
    protected $body = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfAttachmentsType
     * $attachments
     */
    protected $attachments = null;

    /**
     * @property \DateTime $dateTimeReceived
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
     * @property integer $size
     */
    protected $size = null;

    /**
     * @property string[] $categories
     */
    protected $categories = null;

    /**
     * @property string $importance
     */
    protected $importance = null;

    /**
     * @property string $inReplyTo
     */
    protected $inReplyTo = null;

    /**
     * @property boolean $isSubmitted
     */
    protected $isSubmitted = null;

    /**
     * @property boolean $isDraft
     */
    protected $isDraft = null;

    /**
     * @property boolean $isFromMe
     */
    protected $isFromMe = null;

    /**
     * @property boolean $isResend
     */
    protected $isResend = null;

    /**
     * @property boolean $isUnmodified
     */
    protected $isUnmodified = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\InternetHeaderType[]
     * $internetMessageHeaders
     */
    protected $internetMessageHeaders = null;

    /**
     * @property \DateTime $dateTimeSent
     */
    protected $dateTimeSent = null;

    /**
     * @property \DateTime $dateTimeCreated
     */
    protected $dateTimeCreated = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfResponseObjectsType
     * $responseObjects
     */
    protected $responseObjects = null;

    /**
     * @property \DateTime $reminderDueBy
     */
    protected $reminderDueBy = null;

    /**
     * @property boolean $reminderIsSet
     */
    protected $reminderIsSet = null;

    /**
     * @property integer $reminderMinutesBeforeStart
     */
    protected $reminderMinutesBeforeStart = null;

    /**
     * @property string $displayCc
     */
    protected $displayCc = null;

    /**
     * @property string $displayTo
     */
    protected $displayTo = null;

    /**
     * @property boolean $hasAttachments
     */
    protected $hasAttachments = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ExtendedPropertyType[]
     * $extendedProperty
     */
    protected $extendedProperty = null;

    /**
     * @property string $culture
     */
    protected $culture = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EffectiveRightsType $effectiveRights
     */
    protected $effectiveRights = null;

    /**
     * @property string $lastModifiedName
     */
    protected $lastModifiedName = null;

    /**
     * @property \DateTime $lastModifiedTime
     */
    protected $lastModifiedTime = null;

    /**
     * @property boolean $isAssociated
     */
    protected $isAssociated = null;

    /**
     * @property string $webClientReadFormQueryString
     */
    protected $webClientReadFormQueryString = null;

    /**
     * @property string $webClientEditFormQueryString
     */
    protected $webClientEditFormQueryString = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $conversationId
     */
    protected $conversationId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\BodyType $uniqueBody
     */
    protected $uniqueBody = null;

    /**
     * @property string $storeEntryId
     */
    protected $storeEntryId = null;


}

