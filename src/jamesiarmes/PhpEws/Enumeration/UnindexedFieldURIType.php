<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\UnindexedFieldURIType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines frequently referenced properties by URI.
 *
 * @package php-ews\Enumeration
 */
class UnindexedFieldURIType extends Enumeration
{
    /**
     * Identifies the AdjacentMeetingCount property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_ADJACENT_MEETING_COUNT = 'calendar:AdjacentMeetingCount';

    /**
     * Identifies the AdjacentMeetings property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_ADJACENT_MEETINGS = 'calendar:AdjacentMeetings';

    /**
     * Identifies the AllowNewTimeProposal property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_ALLOW_NEW_TIME_PROPOSAL = 'calendar:AllowNewTimeProposal';

    /**
     * Identifies the AppointmentReplyTime property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_APPOINTMENT_REPLY_TIME = 'calendar:AppointmentReplyTime';

    /**
     * Identifies the AppointmentSequenceNumber property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_APPOINTMENT_SEQUENCE_NUMBER = 'calendar:AppointmentSequenceNumber';

    /**
     * Identifies the AppointmentState property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_APPOINTMENT_STATE = 'calendar:AppointmentState';

    /**
     * Identifies the ConferenceType property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_CONFERENCE_TYPE = 'calendar:ConferenceType';

    /**
     * Identifies the ConflictingMeetingCount property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_CONFLICTING_MEETING_COUNT = 'calendar:ConflictingMeetingCount';

    /**
     * Identifies the ConflictingMeetings property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_CONFLICTING_MEETINGS = 'calendar:ConflictingMeetings';

    /**
     * Identifies the DateTimeStamp property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CALENDAR_DATE_TIME_STAMP = 'calendar:DateTimeStamp';

    /**
     * Identifies the DeletedOccurrences property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_DELETED_OCCURRENCES = 'calendar:DeletedOccurrences';

    /**
     * Identifies the Duration property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_DURATION = 'calendar:Duration';

    /**
     * Identifies the End property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_END = 'calendar:End';

    /**
     * Identifies the EndTimeZone property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CALENDAR_END_TIMEZONE = 'calendar:EndTimeZone';

    /**
     * Identifies the EndTimeZoneId property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR_END_TIME_ZONE_ID = 'calendar:EndTimeZoneId';

    /**
     * Identifies the EndWallClock property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR_END_WALL_CLOCK = 'calendar:EndWallClock';

    /**
     * Identifies the FirstOccurrence property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_FIRST_OCCURRENCE = 'calendar:FirstOccurrence';

    /**
     * Identifies the IsAllDayEvent property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_IS_ALL_DAY_EVENT = 'calendar:IsAllDayEvent';

    /**
     * Identifies the IsCancelled property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_IS_CANCELLED = 'calendar:IsCancelled';

    /**
     * Identifies the IsMeeting property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_IS_MEETING = 'calendar:IsMeeting';

    /**
     * Identifies the IsOnlineMeeting property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_IS_ONLINE_MEETING = 'calendar:IsOnlineMeeting';

    /**
     * Identifies the IsOrganizer property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR_IS_ORGANIZER = 'calendar:IsOrganizer';

    /**
     * Identifies the IsRecurring property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_IS_RECURRING = 'calendar:IsRecurring';

    /**
     * Identifies the IsResponseRequested property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_IS_RESPONSE_REQUESTED = 'calendar:IsResponseRequested';

    /**
     * Identifies the CalendarItemType property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_ITEM_TYPE = 'calendar:CalendarItemType';

    /**
     * Identifies the JoinOnlineMeetingUrl property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR_JOIN_ONLINE_MEETING_URL = 'calendar:JoinOnlineMeetingUrl';

    /**
     * Identifies the LastOccurrence property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_LAST_OCCURRENCE = 'calendar:LastOccurrence';

    /**
     * Identifies the LegacyFreeBusyStatus property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_LEGACY_FREE_BUSY_STATUS = 'calendar:LegacyFreeBusyStatus';

    /**
     * Identifies the Location property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_LOCATION = 'calendar:Location';

    /**
     * Identifies the MeetingRequestWasSent property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_MEETING_REQUEST_WAS_SENT = 'calendar:MeetingRequestWasSent';

    /**
     * Identifies the MeetingTimeZone property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_MEETING_TIMEZONE = 'calendar:MeetingTimeZone';

    /**
     * Identifies the MeetingWorkspaceUrl property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_MEETING_WORKSPACE_URL = 'calendar:MeetingWorkspaceUrl';

    /**
     * Identifies the ModifiedOccurrences property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_MODIFIED_OCCURRENCES = 'calendar:ModifiedOccurrences';

    /**
     * Identifies the MyResponseType property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_MY_RESPONSE_TYPE = 'calendar:MyResponseType';

    /**
     * Identifies the NetShowUrl property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_NET_SHOW_URL = 'calendar:NetShowUrl';

    /**
     * Identifies the OnlineMeetingSettings property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR_ONLINE_MEETING_SETTINGS = 'calendar:OnlineMeetingSettings';

    /**
     * Identifies the OptionalAttendees property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_OPTIONAL_ATTENDEES = 'calendar:OptionalAttendees';

    /**
     * Identifies the Organizer property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_ORGANIZER = 'calendar:Organizer';

    /**
     * Identifies the OriginalStart property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_ORIGINAL_START = 'calendar:OriginalStart';

    /**
     * Identifies the Recurrence property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_RECURRENCE = 'calendar:Recurrence';

    /**
     * Identifies the RecurrenceId property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CALENDAR_RECURRENCE_ID = 'calendar:RecurrenceId';

    /**
     * Identifies the RequiredAttendees property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_REQUIRED_ATTENDEES = 'calendar:RequiredAttendees';

    /**
     * Identifies the Resources property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_RESOURCES = 'calendar:Resources';

    /**
     * Identifies the Start property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_START = 'calendar:Start';

    /**
     * Identifies the StartTimeZone property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CALENDAR_START_TIMEZONE = 'calendar:StartTimeZone';

    /**
     * Identifies the StartTimeZoneId property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR_START_TIME_ZONE_ID = 'calendar:StartTimeZoneId';

    /**
     * Identifies the StartWallClock property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR_START_WALL_CLOCK = 'calendar:StartWallClock';

    /**
     * Identifies the TimeZone property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_TIMEZONE = 'calendar:TimeZone';

    /**
     * Identifies the UID property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CALENDAR_UID = 'calendar:UID';

    /**
     * Identifies the When property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_WHEN = 'calendar:When';

    /**
     * Identifies the Alias property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_ALIAS = 'contacts:Alias';

    /**
     * Identifies the AssistantName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_ASSISTANT_NAME = 'contacts:AssistantName';

    /**
     * Identifies the Birthday property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_BIRTHDAY = 'contacts:Birthday';

    /**
     * Identifies the BusinessHomePage property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_BUSINESS_HOME_PAGE = 'contacts:BusinessHomePage';

    /**
     * Identifies the Children property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_CHILDREN = 'contacts:Children';

    /**
     * Identifies the Companies property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_COMPANIES = 'contacts:Companies';

    /**
     * Identifies the CompanyName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_COMPANY_NAME = 'contacts:CompanyName';

    /**
     * Identifies the CompleteName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_COMPLETE_NAME = 'contacts:CompleteName';

    /**
     * Identifies the Culture property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_CULTURE = 'contacts:Culture';

    /**
     * Identifies the Department property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_DEPARTMENT = 'contacts:Department';

    /**
     * Identifies the DirectReports property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_DIRECT_REPORTS = 'contacts:DirectReports';

    /**
     * Identifies the DirectoryId property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_DIRECTORY_ID = 'contacts:DirectoryId';

    /**
     * Identifies the DisplayName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_DISPLAY_NAME = 'contacts:DisplayName';

    /**
     * Identifies the EmailAddresses property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_EMAIL_ADDRESSES = 'contacts:EmailAddresses';

    /**
     * Identifies the FileAs property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_FILE_AS = 'contacts:FileAs';

    /**
     * Identifies the FileAsMapping property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_FILE_AS_MAPPING = 'contacts:FileAsMapping';

    /**
     * Identifies the Generation property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_GENERATION = 'contacts:Generation';

    /**
     * Identifies the GivenName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_GIVEN_NAME = 'contacts:GivenName';

    /**
     * Identifies the HasPicture property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONTACTS_HAS_PICTURE = 'contacts:HasPicture';

    /**
     * Identifies the ImAddresses property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_IM_ADDRESSES = 'contacts:ImAddresses';

    /**
     * Identifies the Initials property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_INITIALS = 'contacts:Initials';

    /**
     * Identifies the JobTitle property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_JOB_TITLE = 'contacts:JobTitle';

    /**
     * Identifies the Manager property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_MANAGER = 'contacts:Manager';

    /**
     * Identifies the ManagerMailbox property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_MANAGER_MAILBOX = 'contacts:ManagerMailbox';

    /**
     * Identifies the MiddleName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_MIDDLE_NAME = 'contacts:MiddleName';

    /**
     * Identifies the Mileage property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_MILEAGE = 'contacts:Mileage';

    /**
     * Identifies the MSExchangeCertificate property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_MS_EXCHANGE_CERTIFICATE = 'contacts:MSExchangeCertificate';

    /**
     * Identifies the Nickname property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_NICKNAME = 'contacts:Nickname';

    /**
     * Identifies the Notes property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_NOTES = 'contacts:Notes';

    /**
     * Identifies the OfficeLocation property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_OFFICE_LOCATION = 'contacts:OfficeLocation';

    /**
     * Identifies the PhoneNumbers property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHONE_NUMBERS = 'contacts:PhoneNumbers';

    /**
     * Identifies the PhoneticFirstName property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_PHONETIC_FIRST_NAME = 'contacts:PhoneticFirstName';

    /**
     * Identifies the PhoneticFullName property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_PHONETIC_FULL_NAME = 'contacts:PhoneticFullName';

    /**
     * Identifies the PhoneticLastName property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_PHONETIC_LAST_NAME = 'contacts:PhoneticLastName';

    /**
     * Identifies the Photo property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_PHOTO = 'contacts:Photo';

    /**
     * Identifies the PhysicalAddresses property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PHYSICAL_ADDRESSES = 'contacts:PhysicalAddresses';

    /**
     * Identifies the PostalAddressIndex property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_POSTAL_ADDRESS_INDEX = 'contacts:PostalAddressIndex';

    /**
     * Identifies the Profession property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_PROFESSION = 'contacts:Profession';

    /**
     * Identifies the ContactSource property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_SOURCE = 'contacts:ContactSource';

    /**
     * Identifies the SpouseName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_SPOUSE_NAME = 'contacts:SpouseName';

    /**
     * Identifies the Surname property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_SURNAME = 'contacts:Surname';

    /**
     * Identifies the UserSMIMECertificate property.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const CONTACTS_USER_SMIME_CERTIFICATE = 'contacts:UserSMIMECertificate';

    /**
     * Identifies the WeddingAnniversary property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTACTS_WEDDING_ANNIVERSARY = 'contacts:WeddingAnniversary';

    /**
     * Identifies the Categories property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_CATEGORIES = 'conversation:Categories';

    /**
     * Identifies the FlagStatus property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_FLAG_STATUS = 'conversation:FlagStatus';

    /**
     * Identifies the GlobalCategories property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_CATEGORIES = 'conversation:GlobalCategories';

    /**
     * Identifies the GlobalFlagStatus property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_FLAG_STATUS = 'conversation:GlobalFlagStatus';

    /**
     * Identifies the GlobalHasAttachments property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_HAS_ATTACHMENTS = 'conversation:GlobalHasAttachments';

    /**
     * Identifies the GlobalImportance property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_IMPORTANCE = 'conversation:GlobalImportance';

    /**
     * Identifies the GlobalItemClasses property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_ITEM_CLASSES = 'conversation:GlobalItemClasses';

    /**
     * Identifies the GlobalItemIds property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_ITEM_IDS = 'conversation:GlobalItemIds';

    /**
     * Identifies the GlobalLastDeliveryTime property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_LAST_DELIVERY_TIME = 'conversation:GlobalLastDeliveryTime';

    /**
     * Identifies the GlobalMessageCount property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_MESSAGE_COUNT = 'conversation:GlobalMessageCount';

    /**
     * Identifies the GlobalParentFolderId property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_PARENT_FOLDER_ID = 'conversation:GlobalParentFolderId';

    /**
     * Identifies the GlobalSize property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_SIZE = 'conversation:GlobalSize';

    /**
     * Identifies the GlobalUniqueRecipients property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_UNIQUE_RECIPIENTS = 'conversation:GlobalUniqueRecipients';

    /**
     * Identifies the GlobalUniqueSenders property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_UNIQUE_SENDERS = 'conversation:GlobalUniqueSenders';

    /**
     * Identifies the GlobalUniqueUnreadSenders property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_UNIQUE_UNREAD_SENDERS = 'conversation:GlobalUniqueUnreadSenders';

    /**
     * Identifies the GlobalUnreadCount property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_GLOBAL_UNREAD_COUNT = 'conversation:GlobalUnreadCount';

    /**
     * Identifies the GroupingAction property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONVERSATION_GROUPING_ACTION = 'conversation:GroupingAction';

    /**
     * Identifies the HasAttachments property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_HAS_ATTACHMENTS = 'conversation:HasAttachments';

    /**
     * Identifies the ConversationId property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_ID = 'conversation:ConversationId';

    /**
     * Identifies the Importance property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_IMPORTANCE = 'conversation:Importance';

    /**
     * Identifies the InstanceKey property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONVERSATION_INSTANCE_KEY = 'conversation:InstanceKey';

    /**
     * Identifies the ItemClasses property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_ITEM_CLASSES = 'conversation:ItemClasses';

    /**
     * Identifies the ItemIds property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_ITEM_IDS = 'conversation:ItemIds';

    /**
     * Identifies the LastDeliveryTime property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_LAST_DELIVERY_TIME = 'conversation:LastDeliveryTime';

    /**
     * Identifies the LastModifiedTime property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONVERSATION_LAST_MODIFIED_TIME = 'conversation:LastModifiedTime';

    /**
     * Identifies the MessageCount property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_MESSAGE_COUNT = 'conversation:MessageCount';

    /**
     * Identifies the NextPredictedAction property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONVERSATION_NEXT_PREDICTED_ACTION = 'conversation:NextPredictedAction';

    /**
     * Identifies the Preview property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONVERSATION_PREVIEW = 'conversation:Preview';

    /**
     * Identifies the Size property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_SIZE = 'conversation:Size';

    /**
     * Identifies the ConversationTopic property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_TOPIC = 'conversation:ConversationTopic';

    /**
     * Identifies the UniqueRecipients property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_UNIQUE_RECIPIENTS = 'conversation:UniqueRecipients';

    /**
     * Identifies the UniqueSenders property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_UNIQUE_SENDERS = 'conversation:UniqueSenders';

    /**
     * Identifies the UniqueUnreadSenders property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_UNIQUE_UNREAD_SENDERS = 'conversation:UniqueUnreadSenders';

    /**
     * Identifies the UnreadCount property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONVERSATION_UNREAD_COUNT = 'conversation:UnreadCount';

    /**
     * Identifies the Members property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DISTRIBUTION_LIST_MEMBERS = 'distributionlist:Members';

    /**
     * Identifies the ChildFolderCount property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_CHILD_FOLDER_COUNT = 'folder:ChildFolderCount';

    /**
     * Identifies the DisplayName property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_DISPLAY_NAME = 'folder:DisplayName';

    /**
     * Identifies the EffectiveRights property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FOLDER_EFFECTIVE_RIGHTS = 'folder:EffectiveRights';

    /**
     * Identifies the FolderClass property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_FOLDER_CLASS = 'folder:FolderClass';

    /**
     * Identifies the FolderId property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_FOLDER_ID = 'folder:FolderId';

    /**
     * Identifies the ManagedFolderInformation property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_MANAGED_FOLDER_INFORMATION = 'folder:ManagedFolderInformation';

    /**
     * Identifies the ParentFolderId property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_PARENT_FOLDER_ID = 'folder:ParentFolderId';

    /**
     * Identifies the PermissionSet property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FOLDER_PERMISSION_SET = 'folder:PermissionSet';

    /**
     * Identifies the SearchParameters property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_SEARCH_PARAMETERS = 'folder:SearchParameters';

    /**
     * Identifies the SharingEffectiveRights property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FOLDER_SHARING_EFFECTIVE_RIGHTS = 'folder:SharingEffectiveRights';

    /**
     * Identifies the TotalCount property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_TOTAL_COUNT = 'folder:TotalCount';

    /**
     * Identifies the UnreadCount property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_UNREAD_COUNT = 'folder:UnreadCount';

    /**
     * Identifies the ArchiveTag property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_ARCHIVE_TAG = 'item:ArchiveTag';

    /**
     * Identifies the Attachments property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_ATTACHMENTS = 'item:Attachments';

    /**
     * Identifies the BlockStatus property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_BLOCK_STATUS = 'item:BlockStatus';

    /**
     * Identifies the Body property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_BODY = 'item:Body';

    /**
     * Identifies the Categories property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_CATEGORIES = 'item:Categories';

    /**
     * Identifies the ItemClass property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_CLASS = 'item:ItemClass';

    /**
     * Identifies the ConversationId property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_CONVERSATION_ID = 'item:ConversationId';

    /**
     * Identifies the Culture property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_CULTURE = 'item:Culture';

    /**
     * Identifies the DateTimeCreated property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_DATE_TIME_CREATED = 'item:DateTimeCreated';

    /**
     * Identifies the DateTimeReceived property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_DATE_TIME_RECEIVED = 'item:DateTimeReceived';

    /**
     * Identifies the DateTimeSent property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_DATE_TIME_SENT = 'item:DateTimeSent';

    /**
     * Identifies the DisplayCc property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_DISPLAY_CC = 'item:DisplayCc';

    /**
     * Identifies the DisplayTo property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_DISPLAY_TO = 'item:DisplayTo';

    /**
     * Identifies the EffectiveRights property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_EFFECTIVE_RIGHTS = 'item:EffectiveRights';

    /**
     * Identifies the EntityExtractionResult property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_ENTITY_EXTRACTION_RESULT = 'item:EntityExtractionResult';

    /**
     * Identifies the Flag property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_FLAG = 'item:Flag';

    /**
     * Identifies the GroupingAction property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_GROUPING_ACTION = 'item:GroupingAction';

    /**
     * Identifies the HasAttachments property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_HAS_ATTACHMENTS = 'item:HasAttachments';

    /**
     * Identifies the HasBlockedImages property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_HAS_BLOCKED_IMAGES = 'item:HasBlockedImages';

    /**
     * Identifies the ItemId property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_ID = 'item:ItemId';

    /**
     * Identifies the Importance property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_IMPORTANCE = 'item:Importance';

    /**
     * Identifies the InReplyTo property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_IN_REPLY_TO = 'item:InReplyTo';

    /**
     * Identifies the InstanceKey property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_INSTANCE_KEY = 'item:InstanceKey';

    /**
     * Identifies the InternetMessageHeaders property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_INTERNET_MESSAGE_HEADERS = 'item:InternetMessageHeaders';

    /**
     * Identifies the IsAssociated property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_IS_ASSOCIATED = 'item:IsAssociated';

    /**
     * Identifies the IsAssociated property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_IS_DRAFT = 'item:IsDraft';

    /**
     * Identifies the IsFromMe property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_IS_FROM_ME = 'item:IsFromMe';

    /**
     * Identifies the IsResend property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_IS_RESEND = 'item:IsResend';

    /**
     * Identifies the IsSubmitted property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_IS_SUBMITTED = 'item:IsSubmitted';

    /**
     * Identifies the IsUnmodified property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_IS_UNMODIFIED = 'item:IsUnmodified';

    /**
     * Identifies the LastModifiedName property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_LAST_MODIFIED_NAME = 'item:LastModifiedName';

    /**
     * Identifies the LastModifiedTime property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_LAST_MODIFIED_TIME = 'item:LastModifiedTime';

    /**
     * Identifies the MimeContent property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_MIME_CONTENT = 'item:MimeContent';

    /**
     * Identifies the NextPredictedAction property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_NEXT_PREDICTED_ACTION = 'item:NextPredictedAction';

    /**
     * Identifies the NormalizedBody property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_NORMALIZED_BODY = 'item:NormalizedBody';

    /**
     * Identifies the ParentFolderId property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_PARENT_FOLDER_ID = 'item:ParentFolderId';

    /**
     * Identifies the PolicyTag property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_POLICY_TAG = 'itemPolicyTag';

    /**
     * Identifies the Preview property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_PREVIEW = 'item:Preview';

    /**
     * Identifies the ReminderDueBy property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_REMINDER_DUE_BY = 'item:ReminderDueBy';

    /**
     * Identifies the ReminderIsSet property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_REMINDER_IS_SET = 'item:ReminderIsSet';

    /**
     * Identifies the ReminderMinutesBeforeStart property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_REMINDER_MINUTES_BEFORE_START = 'item:ReminderMinutesBeforeStart';

    /**
     * Identifies the ReminderNextTime property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_REMINDER_NEXT_TIME = 'item:ReminderNextTime';

    /**
     * Identifies the ResponseObjects property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_RESPONSE_OBJECTS = 'item:ResponseObjects';

    /**
     * Identifies the RetentionDate property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_RETENTION_DATE = 'item:RetentionDate';

    /**
     * Identifies the RightsManagementLicenseData property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_RIGHTS_MANAGEMENT_LICENSE_DATA = 'item:RightsManagementLicenseData';

    /**
     * Identifies the Sensitivity property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_SENSITIVITY = 'item:Sensitivity';

    /**
     * Identifies the Size property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_SIZE = 'item:Size';

    /**
     * Identifies the StoreEntryId property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_STORE_ENTRY_ID = 'item:StoreEntryId';

    /**
     * Identifies the Subject property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_SUBJECT = 'item:Subject';

    /**
     * Identifies the TextBody property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ITEM_TEXT_BODY = 'item:TextBody';

    /**
     * Identifies the UniqueBody property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_UNIQUE_BODY = 'item:UniqueBody';

    /**
     * Identifies the WebClientEditFormQueryString property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_WEB_CLIENT_EDIT_FROM_QUERY_STRING = 'item:WebClientEditFormQueryString';

    /**
     * Identifies the WebClientReadFormQueryString property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_WEB_CLIENT_READ_FROM_QUERY_STRING = 'item:WebClientReadFormQueryString';

    /**
     * Identifies the AssociatedCalendarItemId property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_ASSOCIATED_CALENDAR_ITEM_ID = 'meeting:AssociatedCalendarItemId';

    /**
     * Identifies the IsDelegated property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_IS_DELEGATED = 'meeting:IsDelegated';

    /**
     * Identifies the IsOutOfDate property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_IS_OUT_OF_DATE = 'meeting:IsOutOfDate';

    /**
     * Identifies the HasBeenProcessed property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_HAS_BEEN_PROCESSED = 'meeting:HasBeenProcessed';

    /**
     * Identifies the ProposedEnd property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MEETING_PROPOSED_END = 'meeting:ProposedEnd';

    /**
     * Identifies the ProposedStart property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MEETING_PROPOSED_START = 'meeting:ProposedStart';

    /**
     * Identifies the ChangeHighlights property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MEETING_REQUEST_CHANGE_HIGHLIGHTS = 'meetingRequest:ChangeHighlights';

    /**
     * Identifies the IntendedFreeBusyStatus property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_REQUEST_INTENDED_FREE_BUSY_STATUS = 'meetingRequest:IntendedFreeBusyStatus';

    /**
     * Identifies the MeetingRequestType property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_REQUEST_TYPE = 'meetingRequest:MeetingRequestType';

    /**
     * Identifies the ResponseType property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_RESPONSE_TYPE = 'meeting:ResponseType';

    /**
     * Identifies the BccRecipients property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_BCC_RECIPIENTS = 'message:BccRecipients';

    /**
     * Identifies the CcRecipients property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_CC_RECIPIENTS = 'message:CcRecipients';

    /**
     * Identifies the ConversationIndex property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_CONVERSATION_INDEX = 'message:ConversationIndex';

    /**
     * Identifies the ConversationTopic property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_CONVERSATION_TOPIC = 'message:ConversationTopic';

    /**
     * Identifies the From property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_FROM = 'message:From';

    /**
     * Identifies the InternetMessageId property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_INTERNET_MESSAGE_ID = 'message:InternetMessageId';

    /**
     * Identifies the IsDeliveryReceiptRequested property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_IS_DELIVERY_RECEIPT_REQUESTED = 'message:IsDeliveryReceiptRequested';

    /**
     * Identifies the IsRead property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_IS_READ = 'message:IsRead';

    /**
     * Identifies the IsReadReceiptRequested property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_IS_READ_RECEIPT_REQUESTED = 'message:IsReadReceiptRequested';

    /**
     * Identifies the IsResponseRequested property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_IS_RESPONSE_REQUESTED = 'message:IsResponseRequested';

    /**
     * Identifies the ReceivedBy property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MESSAGE_RECEIVED_BY = 'message:ReceivedBy';

    /**
     * Identifies the ReceivedRepresenting property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MESSAGE_RECEIVED_REPRESENTING = 'message:ReceivedRepresenting';

    /**
     * Identifies the References property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_REFERENCES = 'message:References';

    /**
     * Identifies the ReplyTo property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_REPLY_TO = 'message:ReplyTo';

    /**
     * Identifies the Sender property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_SENDER = 'message:Sender';

    /**
     * Identifies the ToRecipients property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_TO_RECIPIENTS = 'message:ToRecipients';

    /**
     * Identifies the AssistantNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_ASSISTANT_NAMES = 'persona:AssistantNames';

    /**
     * Identifies the AssistantPhoneNumbers property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_ASSISTANT_PHONE_NUMBERS = 'persona:AssistantPhoneNumbers';

    /**
     * Identifies the Attributions property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_ATTRIBUTIONS = 'persona:Attributions';

    /**
     * Identifies the Birthdays property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_BIRTHDAYS = 'persona:Birthdays';

    /**
     * Identifies the Bodies property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_BODIES = 'persona:Bodies';

    /**
     * Identifies the BusinessAddresses property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_BUSINESS_ADDRESSES = 'persona:BusinessAddresses';

    /**
     * Identifies the BusinessHomePages property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_BUSINESS_HOME_PAGES = 'persona:BusinessHomePages';

    /**
     * Identifies the BusinessPhoneNumbers property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_BUSINESS_PHONE_NUMBERS = 'persona:BusinessPhoneNumbers';

    /**
     * Identifies the BusinessPhoneNumbers2 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_BUSINESS_PHONE_NUMBERS_2 = 'persona:BusinessPhoneNumbers2';

    /**
     * Identifies the CallbackPhones property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_CALLBACK_PHONES = 'persona:CallbackPhones';

    /**
     * Identifies the CarPhones property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_CAR_PHONES = 'persona:CarPhones';

    /**
     * Identifies the Children property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_CHILDREN = 'persona:Children';

    /**
     * Identifies the CompanyName property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_COMPANY_NAME = 'persona:CompanyName';

    /**
     * Identifies the CompanyNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_COMPANY_NAMES = 'persona:CompanyNames';

    /**
     * Identifies the CreationTime property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_CREATION_TIME = 'persona:CreationTime';

    /**
     * Identifies the Departments property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_DEPARTMENTS = 'persona:Departments';

    /**
     * Identifies the DisplayName property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_DISPLAY_NAME = 'persona:DisplayName';

    /**
     * Identifies the DisplayNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_DISPLAY_NAMES = 'persona:DisplayNames';

    /**
     * Identifies the DisplayNamePrefix property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_DISPLAY_NAME_PREFIX = 'persona:DisplayNamePrefix';

    /**
     * Identifies the DisplayNamePrefixes property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_DISPLAY_NAME_PREFIXES = 'persona:DisplayNamePrefixes';

    /**
     * Identifies the EmailAddress property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_EMAIL_ADDRESS = 'persona:EmailAddress';

    /**
     * Identifies the EmailAddresses property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_EMAIL_ADDRESSES = 'persona:EmailAddresses';

    /**
     * Identifies the Emails1 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_EMAILS_1 = 'persona:Emails1';

    /**
     * Identifies the Emails2 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_EMAILS_2 = 'persona:Emails2';

    /**
     * Identifies the Emails3 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_EMAILS_3 = 'persona:Emails3';

    /**
     * Identifies the ExtendedProperties property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_EXTENDED_PROPERTIES = 'persona:ExtendedProperties';

    /**
     * Identifies the FileAs property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_FILE_AS = 'persona:FileAs';

    /**
     * Identifies the FileAsId property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_FILE_AS_ID = 'persona:FileAsId';

    /**
     * Identifies the FileAsIds property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_FILE_AS_IDS = 'persona:FileAsIds';

    /**
     * Identifies the FileAses property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_FILE_ASES = 'persona:FileAses';

    /**
     * Identifies the FolderIds property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_FOLDER_IDS = 'persona:FolderIds';

    /**
     * Identifies the Generations property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_GENERATIONS = 'persona:Generations';

    /**
     * Identifies the GivenName property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_GIVEN_NAME = 'persona:GivenName';

    /**
     * Identifies the GivenNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_GIVEN_NAMES = 'persona:GivenNames';

    /**
     * Identifies the Hobbies property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_HOBBIES = 'persona:Hobbies';

    /**
     * Identifies the HomeAddresses property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_HOME_ADDRESSES = 'persona:HomeAddresses';

    /**
     * Identifies the HomeCity property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_HOME_CITY = 'persona:HomeCity';

    /**
     * Identifies the HomeFaxes property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_HOME_FAXES = 'persona:HomeFaxes';

    /**
     * Identifies the HomePhones property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_HOME_PHONES = 'persona:HomePhones';

    /**
     * Identifies the HomePhones2 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_HOME_PHONES_2 = 'persona:HomePhones2';

    /**
     * Identifies the PersonaId property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_ID = 'persona:PersonaId';

    /**
     * Identifies the ImAddress property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_IM_ADDRESS = 'persona:ImAddress';

    /**
     * Identifies the ImAddresses property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_IM_ADDRESSES = 'persona:ImAddresses';

    /**
     * Identifies the ImAddresses2 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_IM_ADDRESSES_2 = 'persona:ImAddresses2';

    /**
     * Identifies the ImAddresses3 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_IM_ADDRESSES_3 = 'persona:ImAddresses3';

    /**
     * Identifies the Initials property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_INITIALS = 'persona:Initials';

    /**
     * Identifies the Locations property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_LOCATIONS = 'persona:Locations';

    /**
     * Identifies the Managers property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_MANAGERS = 'persona:Managers';

    /**
     * Identifies the MiddleNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_MIDDLE_NAMES = 'persona:MiddleNames';

    /**
     * Identifies the MobilePhones property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_MOBILE_PHONES = 'persona:MobilePhones';

    /**
     * Identifies the MobilePhones2 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_MOBILE_PHONES_2 = 'persona:MobilePhones2';

    /**
     * Identifies the Nicknames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_NICKNAMES = 'persona:Nicknames';

    /**
     * Identifies the PersonaObjectStatus property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_OBJECT_STATUS = 'persona:PersonaObjectStatus';

    /**
     * Identifies the OfficeLocations property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_OFFICE_LOCATIONS = 'persona:OfficeLocations';

    /**
     * Identifies the OrganizationMainPhones property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_ORGANIZATION_MAIN_PHONES = 'persona:OrganizationMainPhones';

    /**
     * Identifies the OtherAddresses property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_OTHER_ADDRESSES = 'persona:OtherAddresses';

    /**
     * Identifies the OtherFaxes property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_OTHER_FAXES = 'persona:OtherFaxes';

    /**
     * Identifies the OtherPhones2 property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_OTHER_PHONES_2 = 'persona:OtherPhones2';

    /**
     * Identifies the OtherTelephones property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_OTHER_TELEPHONES = 'persona:OtherTelephones';

    /**
     * Identifies the Pagers property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_PAGERS = 'persona:Pagers';

    /**
     * Identifies the PersonalHomePages property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_PERSONAL_HOME_PAGES = 'persona:PersonalHomePages';

    /**
     * Identifies the PhoneNumber property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_PHONE_NUMBER = 'persona:PhoneNumber';

    /**
     * Identifies the PostalAddress property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_POSTAL_ADDRESS = 'persona:PostalAddress';

    /**
     * Identifies the Professions property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_PROFESSIONS = 'persona:Professions';

    /**
     * Identifies the RadioPhones property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_RADIO_PHONES = 'persona:RadioPhones';

    /**
     * Identifies the RelevanceScore property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_RELEVANCE_SCORE = 'persona:RelevanceScore';

    /**
     * Identifies the School property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_SCHOOL = 'persona:School';

    /**
     * Identifies the SpouseNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_SPOUSE_NAMES = 'persona:SpouseNames';

    /**
     * Identifies the Surname property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_SURNAME = 'persona:Surname';

    /**
     * Identifies the Surnames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_SURNAMES = 'persona:Surnames';

    /**
     * Identifies the TelexNumbers property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_TELEX_NUMBERS = 'persona:TelexNumbers';

    /**
     * Identifies the Title property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_TITLE = 'persona:Title';

    /**
     * Identifies the Titles property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_TITLES = 'persona:Titles';

    /**
     * Identifies the PersonaType property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_TYPE = 'persona:PersonaType';

    /**
     * Identifies the WeddingAnniversaries property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_WEDDING_ANNIVERSARIES = 'persona:WeddingAnniversaries';

    /**
     * Identifies the WorkCity property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_WORK_CITY = 'persona:WorkCity';

    /**
     * Identifies the WorkFaxes property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_WORK_FAXES = 'persona:WorkFaxes';

    /**
     * Identifies the YomiCompanyName property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_YOMI_COMPANY_NAME = 'persona:YomiCompanyName';

    /**
     * Identifies the YomiCompanyNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_YOMI_COMPANY_NAMES = 'persona:YomiCompanyNames';

    /**
     * Identifies the YomiFirstName property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_YOMI_FIRST_NAME = 'persona:YomiFirstName';

    /**
     * Identifies the YomiFirstNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_YOMI_FIRST_NAMES = 'persona:YomiFirstNames';

    /**
     * Identifies the YomiLastName property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_YOMI_LAST_NAME = 'persona:YomiLastName';

    /**
     * Identifies the YomiLastNames property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PERSONA_YOMI_LAST_NAMES = 'persona:YomiLastNames';

    /**
     * Identifies the PostedTime property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const POST_ITEM_POSTED_TIME = 'postitem:PostedTime';

    /**
     * Identifies the ActualWork property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_ACTUAL_WORK = 'task:ActualWork';

    /**
     * Identifies the AssignedTime property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_ASSIGNED_TIME = 'task:AssignedTime';

    /**
     * Identifies the BillingInformation property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_BILLING_INFORMATION = 'task:BillingInformation';

    /**
     * Identifies the ChangeCount property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_CHANGE_COUNT = 'task:ChangeCount';

    /**
     * Identifies the Companies property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_COMPANIES = 'task:Companies';

    /**
     * Identifies the CompleteDate property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_COMPLETE_DATE = 'task:CompleteDate';

    /**
     * Identifies the Contacts property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_CONTACTS = 'task:Contacts';

    /**
     * Identifies the DelegationState property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_DELEGATION_STATE = 'task:DelegationState';

    /**
     * Identifies the Delegator property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_DELEGATOR = 'task:Delegator';

    /**
     * Identifies the DueDate property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_DUE_DATE = 'task:DueDate';

    /**
     * Identifies the IsAssignmentEditable property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_IS_ASSIGNMENT_EDITABLE = 'task:IsAssignmentEditable';

    /**
     * Identifies the IsComplete property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_IS_COMPLETE = 'task:IsComplete';

    /**
     * Identifies the IsRecurring property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_IS_RECURRING = 'task:IsRecurring';

    /**
     * Identifies the IsTeamTask property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_IS_TEAM_TASK = 'task:IsTeamTask';

    /**
     * Identifies the Mileage property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_MILEAGE = 'task:Mileage';

    /**
     * Identifies the Owner property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_OWNER = 'task:Owner';

    /**
     * Identifies the PercentComplete property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_PERCENT_COMPLETE = 'task:PercentComplete';

    /**
     * Identifies the Recurrence property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_RECURRENCE = 'task:Recurrence';

    /**
     * Identifies the StartDate property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_START_DATE = 'task:StartDate';

    /**
     * Identifies the Status property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_STATUS = 'task:Status';

    /**
     * Identifies the StatusDescription property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_STATUS_DESCRIPTION = 'task:StatusDescription';

    /**
     * Identifies the TotalWork property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TASK_TOTAL_WORK = 'task:TotalWork';
}
