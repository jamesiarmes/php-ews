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
 * @method ItemType setMimeContent($mimeContent)
 * @method ItemType getItemId()
 * @method ItemType setItemId($itemId)
 * @method ItemType getParentFolderId()
 * @method ItemType setParentFolderId($parentFolderId)
 * @method ItemType getItemClass()
 * @method ItemType setItemClass($itemClass)
 * @method ItemType getSubject()
 * @method ItemType setSubject($subject)
 * @method ItemType getSensitivity()
 * @method ItemType setSensitivity($sensitivity)
 * @method ItemType getBody()
 * @method ItemType setBody($body)
 * @method ItemType getAttachments()
 * @method ItemType setAttachments($attachments)
 * @method ItemType getDateTimeReceived()
 * @method ItemType setDateTimeReceived($dateTimeReceived)
 * @method ItemType getSize()
 * @method ItemType setSize($size)
 * @method ItemType getCategories()
 * @method ItemType setCategories($categories)
 * @method ItemType getImportance()
 * @method ItemType setImportance($importance)
 * @method ItemType getInReplyTo()
 * @method ItemType setInReplyTo($inReplyTo)
 * @method ItemType getIsSubmitted()
 * @method ItemType setIsSubmitted($isSubmitted)
 * @method ItemType getIsDraft()
 * @method ItemType setIsDraft($isDraft)
 * @method ItemType getIsFromMe()
 * @method ItemType setIsFromMe($isFromMe)
 * @method ItemType getIsResend()
 * @method ItemType setIsResend($isResend)
 * @method ItemType getIsUnmodified()
 * @method ItemType setIsUnmodified($isUnmodified)
 * @method ItemType getInternetMessageHeaders()
 * @method ItemType setInternetMessageHeaders($internetMessageHeaders)
 * @method ItemType getDateTimeSent()
 * @method ItemType setDateTimeSent($dateTimeSent)
 * @method ItemType getDateTimeCreated()
 * @method ItemType setDateTimeCreated($dateTimeCreated)
 * @method ItemType getResponseObjects()
 * @method ItemType setResponseObjects($responseObjects)
 * @method ItemType getReminderDueBy()
 * @method ItemType setReminderDueBy($reminderDueBy)
 * @method ItemType getReminderIsSet()
 * @method ItemType setReminderIsSet($reminderIsSet)
 * @method ItemType getReminderMinutesBeforeStart()
 * @method ItemType setReminderMinutesBeforeStart($reminderMinutesBeforeStart)
 * @method ItemType getDisplayCc()
 * @method ItemType setDisplayCc($displayCc)
 * @method ItemType getDisplayTo()
 * @method ItemType setDisplayTo($displayTo)
 * @method ItemType getHasAttachments()
 * @method ItemType setHasAttachments($hasAttachments)
 * @method ItemType getExtendedProperty()
 * @method ItemType setExtendedProperty($extendedProperty)
 * @method ItemType getCulture()
 * @method ItemType setCulture($culture)
 * @method ItemType getEffectiveRights()
 * @method ItemType setEffectiveRights($effectiveRights)
 * @method ItemType getLastModifiedName()
 * @method ItemType setLastModifiedName($lastModifiedName)
 * @method ItemType getLastModifiedTime()
 * @method ItemType setLastModifiedTime($lastModifiedTime)
 * @method ItemType getIsAssociated()
 * @method ItemType setIsAssociated($isAssociated)
 * @method ItemType getWebClientReadFormQueryString()
 * @method ItemType setWebClientReadFormQueryString($webClientReadFormQueryString)
 * @method ItemType getWebClientEditFormQueryString()
 * @method ItemType setWebClientEditFormQueryString($webClientEditFormQueryString)
 * @method ItemType getConversationId()
 * @method ItemType setConversationId($conversationId)
 * @method ItemType getUniqueBody()
 * @method ItemType setUniqueBody($uniqueBody)
 * @method ItemType getStoreEntryId()
 * @method ItemType setStoreEntryId($storeEntryId)
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
     * @property array $categories
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
     * @property array $internetMessageHeaders
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
     * @property array $extendedProperty
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
     * @property mixed $storeEntryId
     */
    protected $storeEntryId = null;


}

