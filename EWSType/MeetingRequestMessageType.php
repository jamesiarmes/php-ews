<?php
/**
 * Contains EWSType_MeetingRequestMessageType.
 */

/**
 * Represents a meeting cancellation in the Exchange store.
 *
 * @package php-ews\Types
 */
class EWSType_MeetingRequestMessageType extends EWSType
{
    /**
     * Represents the total number of calendar items that are adjacent to a
     * meeting time.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AdjacentMeetingCount;

    /**
     * Describes all calendar items that are adjacent to a meeting time.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfAllItemsType
     */
    public $AdjacentMeetings;

    /**
     * Represents whether a new meeting time can be proposed for a meeting.
     *
     * @since Exchange 2007
     *
     * @var boolea
     */
    public $AllowNewTimeProposal;

    /**
     * Represents the date and time when an attendee replied to a meeting
     * request.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $AppointmentReplyTime;

    /**
     * Specifies the sequence number of a version of an appointment.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AppointmentSequenceNumber;

    /**
     * Specifies the status of the appointment.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AppointmentState;

    /**
     * Represents the calendar item that is associated with a MeetingMessage.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $AssociatedCalendarItemId;

    /**
     * Contains the items or files that are attached to an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Represents a collection of recipients to receive a blind carbon copy
     * (Bcc) of an e-mail.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * Represents the occurrence type of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CalendarItemTypeType
     */
    public $CalendarItemType;

    /**
     * Represents a collection of strings that identify to which categories an
     * item in the mailbox belongs.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Categories;

    /**
     * Represents a collection of recipients that will receive a copy of the
     * message.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * Describes the type of conferencing that is performed with a calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ConferenceTypeType
     */
    public $ConferenceType;

    /**
     * Represents the number of meetings that conflict with the meeting request.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $ConflictingMeetingCount;

    /**
     * Identifies all items that conflict with a meeting time.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfAllItemsType
     */
    public $ConflictingMeetings;

    /**
     * Contains the identifier of an item or conversation.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ItemIdType
     */
    public $ConversationId;

    /**
     * Contains a binary ID that represents the thread to which this message
     * belongs.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a base 64 class?
     */
    public $ConversationIndex;

    /**
     * Represents the conversation identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * Represents the culture for a given item in a mailbox.
     *
     * Specified by using the RFC 1766 culture identifier; for example, en-US.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Culture;

    /**
     * Represents the date and time that a given item in the mailbox was
     * created.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeCreated;

    /**
     * Represents the date and time that an item in a mailbox was received.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeReceived;

    /**
     * Represents the date and time that an item in a mailbox was sent.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeSent;

    /**
     * Indicates the date and time that an instance of an iCalendar object was
     * created.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeStamp;

    /**
     * Contains an array of deleted occurrences of a recurring calendar item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfDeletedOccurrencesType
     */
    public $DeletedOccurrences;

    /**
     * Represents the display string that is used for the contents of the Cc
     * box.
     *
     * This is the concatenated string of all Cc recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayCc;

    /**
     * Represents the display string that is used for the contents of the To
     * box.
     *
     * This is the concatenated string of all To recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayTo;

    /**
     * Represents the duration of a calendar item.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Duration;

    /**
     * Contains the client's rights based on the permission settings for the
     * item or folder.
     *
     * This element is read-only.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_EffectiveRightsType
     */
    public $EffectiveRights;

    /**
     * Represents the end of a duration.
     *
     * This element only applies to a single occurrence of a calendar item.
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $End;

    /**
     * Represents the end time zone of the calendar item.
     *
     * @since Exchange 2010
     *
     * @var EWSType_TimeZoneDefinitionType
     */
    public $EndTimeZone;

    /**
     * Identifies extended properties on folders and items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * Represents the first occurrence of a recurring calendar item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var EWSType_OccurrenceInfoType
     */
    public $FirstOccurrence;

    /**
     * Represents the addressee from whom the message was sent.
     *
     * @since Exchange 2007
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * Represents a property that is set to true if an item has at least one
     * visible attachment.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasAttachments;

    /**
     * Indicates whether a meeting message item has been processed.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasBeenProcessed;

    /**
     * Describes the importance of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ImportanceChoicesType
     */
    public $Importance;

    /**
     * Represents the identifier of the item to which this item is a reply.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $InReplyTo;

    /**
     * Represents the intended status for the calendar item that is associated
     * with the meeting request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_LegacyFreeBusyType
     */
    public $IntendedFreeBusyStatus;

    /**
     * Represents the collection of all Internet message headers that are
     * contained within an item in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Represents the Internet message identifier of an item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * Indicates whether a calendar item or meeting request represents an
     * all-day event.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsAllDayEvent;

    /**
     * Indicates whether the item is associated with a folder.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsAssociated;

    /**
     * Indicates whether an appointment or meeting has been cancelled.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsCancelled;

    /**
     * Indicates whether a meeting was handled by an account with delegate
     * access.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDelegated;

    /**
     * Indicates whether the sender of an item requests a delivery receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * Represents whether an item has not yet been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDraft;

    /**
     * Indicates whether a user sent an item to him or herself.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsFromMe;

    /**
     * Indicates whether the calendar item is either a meeting or appointment.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * Indicates whether the meeting is online.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsOnlineMeeting;

    /**
     * Indicates whether a meeting message is out-of-date.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsOutOfDate;

    /**
     * Indicates whether a message has been read.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Indicates whether the sender of an item requests a read receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * Indicates whether a calendar item is part of a recurring item.
     *
     * This element is read-only.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * Indicates whether the item had previously been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsResend;

    /**
     * Indicates whether a response to an e-mail message is requested.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsResponseRequested;

    /**
     * Indicates whether an item has been submitted to the Outbox default
     * folder.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsSubmitted;

    /**
     * Indicates whether the item has been modified.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsUnmodified;

    /**
     * Represents the message class of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemClassType
     */
    public $ItemClass;

    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Contains the display name of the last user to modify an item.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $LastModifiedName;

    /**
     * Indicates when an item was last modified.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastModifiedTime;

    /**
     * Represents the last occurrence of a recurring calendar item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var EWSType_OccurrenceInfoType
     */
    public $LastOccurrence;

    /**
     * Represents the free/busy status of the calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_LegacyFreeBusyType
     */
    public $LegacyFreeBusyStatus;

    /**
     * Represents the location of a meeting or appointment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Location;

    /**
     * Describes the type of the meeting request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MeetingRequestTypeType
     */
    public $MeetingRequestType;

    /**
     * Indicates whether a meeting request has been sent to requested attendees.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $MeetingRequestWasSent;

    /**
     * Represents the time zone of the location where the meeting is hosted.
     *
     * @since Exchange 2007
     *
     * @var EWSType_TimeZoneType
     */
    public $MeetingTimeZone;

    /**
     * Contains the URL for the meeting workspace that is linked to by the
     * calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MeetingWorkspaceUrl;

    /**
     * Contains the native MIME stream of an object that is represented in
     * base64Binary format.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MimeContentType
     */
    public $MimeContent;

    /**
     * Contains an array of recurring calendar item occurrences that have been
     * modified so that they are different than the recurrence master item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfOccurrenceInfoType
     */
    public $ModifiedOccurrences;

    /**
     * Contains the status of or response to a calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseTypeType
     */
    public $MyResponseType;

    /**
     * Specifies the URL for a Microsoft Netshow online meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $NetShowUrl;

    /**
     * Represents attendees that are not required to attend a meeting.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfAttendeesType
     */
    public $OptionalAttendees;

    /**
     * Represents the organizer of a meeting.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SingleRecipientType
     */
    public $Organizer;

    /**
     * Represents the original start time of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $OriginalStart;

    /**
     * Represents the identifier of the parent folder that contains the item or
     * folder.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * Identifies the delegate in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * Identifies the principal in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_SingleRecipientType
     */
    public $ReceivedRepresenting;

    /**
     * Contains the recurrence pattern for calendar items and meeting requests.
     *
     * @since Exchange 2007
     *
     * @var EWSType_RecurrenceType
     */
    public $Recurrence;

    /**
     * Used to identify a specific instance of a recurring calendar item.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $RecurrenceId;

    /**
     * Represents the Usenet header that is used to correlate replies with their
     * original messages.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $References;

    /**
     * Represents the date and time when the event occurs.
     *
     * This is used by the ReminderMinutesBeforeStart element to determine when
     * the reminder is displayed.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ReminderDueBy;

    /**
     * Indicates whether a reminder has been set for an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $ReminderIsSet;

    /**
     * Represents the number of minutes before an event that a reminder is
     * displayed.
     *
     * @since Exchange 2007
     *
     * @var integer
     *
     * @todo Determine if we need a ReminderMinutesBeforeStartType
     * implementation.
     */
    public $ReminderMinutesBeforeStart;

    /**
     * Identifies a set of addresses to which replies should be sent.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ReplyTo;

    /**
     * Represents attendees that are required to attend a meeting.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfAttendeesType
     */
    public $RequiredAttendees;

    /**
     * Represents a scheduled resource for a meeting.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfAttendeesType
     */
    public $Resources;

    /**
     * Contains a collection of all the response objects that are associated
     * with an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;

    /**
     * Represents the type of recipient response received for a meeting.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseTypeType
     */
    public $ResponseType;

    /**
     * Identifies the sender of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SingleRecipientType
     */
    public $Sender;

    /**
     * Indicates the sensitivity level of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Represents the size in bytes of an item.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Size;

    /**
     * Represents the start of a calendar item.
     *
     * This element only applies to a single occurrence of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;

    /**
     * Represents the start time zone of the calendar item.
     *
     * @since Exchange 2010
     *
     * @var EWSType_TimeZoneDefinitionType
     */
    public $StartTimeZone;

    /**
     * Represents the subject for Exchange store items and response objects.
     *
     * The subject is limited to 255 characters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;

    /**
     * Provides a text description of a time zone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $TimeZone;

    /**
     * Contains a set of recipients of a message.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * Identifies a calendar item.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $UID;

    /**
     * Represents an HTML fragment or plain text which represents the unique
     * body of this conversation.
     *
     * @since Exchange 2010
     *
     * @var EWSType_BodyType
     */
    public $UniqueBody;

    /**
     * Represents a URL to concatenate to the Outlook Web App endpoint to edit
     * an item in Outlook Web App.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $WebClientEditFormQueryString;

    /**
     * Represents a URL to concatenate to the Microsoft Office Outlook Web App
     * endpoint to read an item in Outlook Web App.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $WebClientReadFormQueryString;

    /**
     * Provides a description of when a meeting occurs.
     *
     * @since Exchange 2007
     *
     * @type string
     * @var unknown
     */
    public $When;
}
