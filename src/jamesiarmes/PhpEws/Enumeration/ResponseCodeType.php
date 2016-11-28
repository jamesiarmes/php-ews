<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ResponseCodeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Provides status information about a request.
 *
 * @package php-ews\Enumeration
 */
class ResponseCodeType extends Enumeration
{
    /**
     * This error occurs when the calling account does not have the rights to
     * perform the requested action.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACCESS_DENIED = 'ErrorAccessDenied';

    /**
     * This error is for internal use only. This error is not returned.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ACCESS_MODE_SPECIFIED = 'ErrorAccessModeSpecified';

    /**
     * This error occurs when the account in question has been disabled.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACCOUNT_DISABLED = 'ErrorAccountDisabled';

    /**
     * This error occurs when AD DS is unavailable; Try your request again
     * later.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const AD_UNAVAILABLE = 'ErrorADUnavailable';

    /**
     * This error occurs when a list with added delegates cannot be saved.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ADD_DELEGATES_FAILED = 'ErrorAddDelegatesFailed';

    /**
     * This error occurs when the address space record, or Domain Name System
     * (DNS) domain name, for cross-forest availability could not be found in
     * the Active Directory database.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ADDRESS_SPACE_NOT_FOUND = 'ErrorAddressSpaceNotFound';

    /**
     * This error indicates that the AffectedTaskOccurrences attribute was not
     * specified.
     *
     * When the DeleteItem element is used to delete at least one item that is a
     * task, and regardless of whether that task is recurring or not, the
     * AffectedTaskOccurrences attribute has to be specified so that DeleteItem
     * can determine whether to delete the current occurrence or the entire
     * series.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const AFFECTED_TASK_OCCURRENCES_REQUIRED = 'ErrorAffectedTaskOccurrencesRequired';

    /**
     * This error MUST be returned if an action cannot be applied to one or more
     * items in the conversation.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const APPLY_CONVERSATION_ACTION_FAILED = 'ErrorApplyConversationActionFailed';

    /**
     * Indicates that the archive mailbox was not enabled.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ARCHIVE_MAILBOX_NOT_ENABLED = 'ErrorArchiveMailboxNotEnabled';

    /**
     * This error is returned when an archive mailbox search is unsuccessful.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ARCHIVE_MAILBOX_SEARCH_FAILED = 'ErrorArchiveMailboxSearchFailed';

    /**
     * Indicates that archive mailbox service discovery failed.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ARCHIVE_MAILBOX_SERVICE_DISCOVERY_FAILED = 'ErrorArchiveMailboxServiceDiscoveryFailed';

    /**
     * Specifies that an attempt was made to create an item with more than 10
     * nested attachments.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    const ATTACHMENT_NEST_LEVEL_LIMIT_EXCEEDED = 'ErrorAttachmentNestLevelLimitExceeded';

    /**
     * This error occurs if an attempt to create or retrieve an attachment with
     * size exceeding a 32-bit integer in bytes.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ATTACHMENT_SIZE_LIMIT_EXCEEDED = 'ErrorAttachmentSizeLimitExceeded';

    /**
     * This error indicates that Exchange Web Services tried to determine the
     * location of a cross-forest computer that is running Exchange that has the
     * Client Access server role installed by using the Autodiscover service,
     * but the call to the Autodiscover service failed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const AUTO_DISCOVERY_FAILED = 'ErrorAutoDiscoverFailed';

    /**
     * This error indicates that the availability configuration information for
     * the local forest is missing from AD DS.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const AVAILABILITY_CONFIG_NOT_FOUND = 'ErrorAvailabilityConfigNotFound';

    /**
     * This error indicates that an exception occurred while processing an item
     * and that exception is likely to occur for the items that follow.
     *
     * Requests may include multiple items; for example, a GetItem operation
     * request might include multiple identifiers. In general, items are
     * processed one at a time. If an exception occurs while processing an item
     * and that exception is likely to occur for the items that follow, items
     * that follow will not be processed.
     *
     * The following are examples of errors that will stop processing for items
     * that follow:
     * - ErrorAccessDenied
     * - ErrorAccountDisabled
     * - ErrorADUnavailable
     * - ErrorADOperation
     * - ErrorConnectionFailed
     * - ErrorMailboxStoreUnavailable
     * - ErrorMailboxMoveInProgress
     * - ErrorPasswordChangeRequired
     * - ErrorPasswordExpired
     * - ErrorQuotaExceeded
     * - ErrorInsufficientResources
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BATCH_PROCESSING_STOPPED = 'ErrorBatchProcessingStopped';

    /**
     * This error is reported on Create/Update calendar item or task recurrence
     * properties when the property value is out of range.
     *
     * For example, specifying the fifteenth week of the month will result in
     * this response code.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CALENDAR_OUT_OF_RANGE = 'ErrorCalendarOutOfRange';

    /**
     * Indicates that an attempt was made to archive a calendar contact task folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CANNOT_ARCHIVE_CALENDAR_CONTACT_TASK_FOLDER = 'ErrorCannotArchiveCalendarContactTaskFolderException';

    /**
     * Indicates that attempt was made to archive items in the archive mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CANNOT_ARCHIVE_ITEM_IN_ARCHIVE_MAILBOX = 'ErrorCannotArchiveItemsInArchiveMailbox';

    /**
     * Indicates that an attempt was made to archive items in public folders.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CANNOT_ARCHIVE_ITEMS_IN_PUBLIC_FOLDERS = 'ErrorCannotArchiveItemsInPublicFolders';

    /**
     * This error occurs when a calendar item is being created and the
     * SavedItemFolderId attribute refers to a non-calendar folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_CREATE_CALENDAR_ITEM_FOLDER = 'ErrorCannotCreateCalendarItemInNonCalendarFolder';

    /**
     * This error occurs when a contact is being created and the
     * SavedItemFolderId attribute refers to a non-contact folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_CREATE_CONTACT_IN_FOLDER = 'ErrorCannotCreateContactInNonContactFolder';

    /**
     * This error indicates that a post item cannot be created in a folder other
     * than a mail folder, such as Calendar, Contact, Tasks, Notes, and so on.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_CREATE_POST_IN_FOLDER = 'ErrorCannotCreatePostItemInNonMailFolder';

    /**
     * This error occurs when a task is being created and the SavedItemFolderId
     * attribute refers to a non-task folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_CREATE_TASK_IN_FOLDER = 'ErrorCannotCreateTaskInNonTaskFolder';

    /**
     * This error occurs when the item or folder to delete cannot be deleted.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_DELETE_OBJECT = 'ErrorCannotDeleteObject';

    /**
     * The DeleteItem Operation returns this error when it fails to delete the
     * current occurrence of a recurring task.
     *
     * This can only happen if the AffectedTaskOccurrences attribute has been
     * set to SpecifiedOccurrenceOnly.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_DELETE_TASK_OCCURRENCE = 'ErrorCannotDeleteTaskOccurrence';

    /**
     * Indicates that an attempt was made to disable a mandatory extension.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CANNOT_DISABLE_MANDATORY_EXTENSION = 'ErrorCannotDisableMandatoryExtension';

    /**
     * This error must be returned when the server cannot empty a folder.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CANNOT_EMPTY_FOLDER = 'ErrorCannotEmptyFolder';

    /**
     * Specifies that the server could not retrieve the external URL for Outlook
     * Web App Options.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CANNOT_GET_EXTERNAL_ECP_URL = 'ErrorCannotGetExternalEcpUrl';

    /**
     * Indicates that the source folder path could not be retrieved.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CANNOT_GET_SOURCE_FOLDER_PATH = 'ErrorCannotGetSourceFolderPath';

    /**
     * This error occurs when an attempt is made to move or copy an occurrence
     * of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_MOVE_OR_COPY_OCCURRENCE = 'ErrorCalendarCannotMoveOrCopyOccurrence';

    /**
     * The GetAttachment operation returns this error if it cannot retrieve the
     * body of a file attachment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_OPEN_FILE_ATTACHMENT = 'ErrorCannotOpenFileAttachment';

    /**
     * This error indicates that the caller tried to set calendar permissions on
     * a non-calendar folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_SET_CALENDAR_PERMISSION_ON_FOLDER = 'ErrorCannotSetCalendarPermissionOnNonCalendarFolder';

    /**
     * This error indicates that the caller tried to set non-calendar permissions on a calendar folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_SET_NON_CALENDAR_PERMISSION_ON_FOLDER = 'ErrorCannotSetNonCalendarPermissionOnCalendarFolder';

    /**
     * This error indicates that you cannot set unknown permissions in a
     * permissions set.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_SET_PERMISSION_UNKNOWN_ENTRIES = 'ErrorCannotSetPermissionUnknownEntries';

    /**
     * Indicates that an attempt was made to specify the search folder as the
     * source folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CANNOT_SPECIFY_SEARCH_FOLDER_AS_SOURCE = 'ErrorCannotSpecifySearchFolderAsSourceFolder';

    /**
     * This error occurs when an attempt is made to update a calendar item that
     * is located in the Deleted Items folder and when meeting updates or
     * cancellations are to be sent according to the value of the
     * SendMeetingInvitationsOrCancellations attribute.
     *
     * The following are the possible values for this attribute:
     * - SendToAllAndSaveCopy
     * - SendToChangedAndSaveCopy
     * - SendOnlyToAll
     * - SendOnlyToChanged
     *
     * However, such an update is allowed only when the value of this attribute
     * is set to SendToNone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_UPDATE_DELETED_ITEM = 'ErrorCalendarCannotUpdateDeletedItem';

    /**
     * This error occurs when a request that requires an item identifier is
     * given a folder identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_USE_FOLDER_ID_FOR_ITEM_ID = 'ErrorCannotUseFolderIdForItemId';

    /**
     * This error occurs when the UpdateItem, GetItem, DeleteItem, MoveItem,
     * CopyItem, or SendItem operation is called and the ID that was specified
     * is not an occurrence ID of any recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_USE_ID_FOR_OCCURRENCE_ID = 'ErrorCalendarCannotUseIdForOccurrenceId';

    /**
     * This error occurs when the UpdateItem, GetItem, DeleteItem, MoveItem,
     * CopyItem, or SendItem operation is called and the ID that was specified
     * is not an ID of any recurring master item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_USE_ID_FOR_RECURRING_MASTER_ID = 'ErrorCalendarCannotUseIdForRecurringMasterId';

    /**
     * This error occurs when a request that requires a folder identifier is
     * given an item identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CANNOT_USE_ITEM_ID_FOR_FOLDER_ID = 'ErrorCannotUseItemIdForFolderId';

    /**
     * This response code has been replaced by
     * ErrorChangeKeyRequiredForWriteOperations.
     *
     * @since Exchange 2007
     * @deprecated Exchange 2007
     *
     * @var string
     */
    const CHANGE_KEY_REQUIRED = 'ErrorChangeKeyRequired';

    /**
     * This error is returned when the change key for an item is missing or
     * stale.
     *
     * For SendItem, UpdateItem, and UpdateFolder operations, the caller must
     * pass in a correct and current change key for the item. Note that this is
     * the case with UpdateItem even when conflict resolution is set to always
     * overwrite.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CHANGE_KEY_REQUIRED_FOR_WRITE = 'ErrorChangeKeyRequiredForWriteOperations';

    /**
     * Specifies that the client was disconnected.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CLIENT_DISCONNECTED = 'ErrorClientDisconnected';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CLIENT_INTENT_INVALID_STATE_DEFINITION = 'ErrorClientIntentInvalidStateDefinition';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CLIENT_INTENT_NOT_FOUND = 'ErrorClientIntentNotFound';

    /**
     * This error occurs when Exchange Web Services cannot connect to the
     * mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONNECTION_FAILED = 'ErrorConnectionFailed';

    /**
     * This error indicates that the property that was inspected for a Contains
     * filter is not a string type.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONTAINS_FILTER_WRONG_TYPE = 'ErrorContainsFilterWrongType';

    /**
     * The GetItem operation returns this error when Exchange Web Services is
     * unable to retrieve the MIME content for the item requested; the
     * CreateItem operation returns this error when Exchange Web Services is
     * unable to create the item from the supplied MIME content.
     *
     * Usually this is an indication that the item property is corrupted or
     * truncated.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONTENT_CONVERSION_FAILED = 'ErrorContentConversionFailed';

    /**
     * This error occurs when a search request is made using the QueryString
     * option and content indexing is not enabled for the target mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CONTENT_INDEXING_NOT_ENABLED = 'ErrorContentIndexingNotEnabled';

    /**
     * This error occurs when the data is corrupted and cannot be processed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CORRUPT_DATA = 'ErrorCorruptData';

    /**
     * This error occurs when the caller does not have permission to create the
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CREATE_ITEM_ACCESS_DENIED = 'ErrorCreateItemAccessDenied';

    /**
     * This error occurs when one or more of the managed folders that were
     * specified in the CreateManagedFolder operation request failed to be
     * created.
     *
     * Search for each folder to determine which folders were created and which
     * folders do not exist.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CREATE_MANAGED_FOLDER_PARTIAL_COMPLETION = 'ErrorCreateManagedFolderPartialCompletion';

    /**
     * This error occurs when the calling account does not have the permissions
     * required to create the subfolder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CREATE_SUBFOLDER_ACCESS_DENIED = 'ErrorCreateSubfolderAccessDenied';

    /**
     * This error occurs when an attempt is made to move an item or folder
     * from one mailbox to another; if the source mailbox and destination
     * mailbox are different, you will get this error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CROSS_MAILBOX_MOVE_COPY = 'ErrorCrossMailboxMoveCopy';

    /**
     * This error indicates that the request is not allowed because the Client
     * Access server that should service the request is in a different site.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CROSS_SITE_REQUEST = 'ErrorCrossSiteRequest';

    /**
     * This error can occur in the following scenarios:
     * - An attempt is made to access or write a property on an item and the
     *   property value is too large.
     * - The base64 encoded MIME content length within the request XML exceeds
     *   the limit.
     * - The size of the body of an existing item body exceeds the limit.
     * - The consumer tries to set an HTML or text body whose length (or
     *   combined length in the case of append) exceeds the limit.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DATA_SIZE_LIMIT_EXCEEDED = 'ErrorDataSizeLimitExceeded';

    /**
     * This error occurs when the underlying data provider fails to complete the
     * operation.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DATA_SOURCE_OPERATION = 'ErrorDataSourceOperation';

    /**
     * This error occurs in an AddDelegate operation when the specified user
     * already exists in the list of delegates.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATE_ALREADY_EXISTS = 'ErrorDelegateAlreadyExists';

    /**
     * This error occurs in an AddDelegate operation when the specified user to
     * be added is the owner of the mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATE_CANNOT_ADD_OWNER = 'ErrorDelegateCannotAddOwner';

    /**
     * This error occurs in a GetDelegate operation when either there is no
     * delegate information on the local FreeBusy message or no Active Directory
     * public delegate (no “public delegate” or no "Send On Behalf" entry in AD
     * DS).
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATE_MISSING_CONFIGURATION = 'ErrorDelegateMissingConfiguration';

    /**
     * This error occurs when a specified user cannot be mapped to a user in AD
     * DS.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATE_NO_USER = 'ErrorDelegateNoUser';

    /**
     * This error occurs in the AddDelegate operation when an added delegate
     * user is not valid.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATE_VALIDATION_FAILED = 'ErrorDelegateValidationFailed';

    /**
     * This error occurs when an attempt is made to delete a distinguished
     * folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DELETE_DISTINGUISHED_FOLDER = 'ErrorDeleteDistinguishedFolder';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DELETE_ITEMS_FAILED = 'ErrorDeleteItemsFailed';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DELETE_UNIFIED_MESSAGING_PROMPT_FAILED = 'ErrorDeleteUnifiedMessagingPromptFailed';

    /**
     * This error is returned when discovery searches are disabled on a tenant
     * or server.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DISCOVERY_SEARCHES_DISABLED = 'ErrorDiscoverySearchesDisabled';

    /**
     * This error indicates that a distinguished user ID is not valid for the
     * operation; DistinguishedUserType should not be present in the request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DISTINGUISHED_USER_NOT_SUPPORTED = 'ErrorDistinguishedUserNotSupported';

    /**
     * This error indicates that a request distribution list member does not
     * exist in the distribution list.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DISTRIBUTION_LIST_MEMBER_NOT_EXIST = 'ErrorDistributionListMemberNotExist';

    /**
     * This error occurs when duplicate folder names are specified within the
     * FolderNames element of the CreateManagedFolder operation request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DUPLICATE_INPUT_FOLDER_NAMES = 'ErrorDuplicateInputFolderNames';

    /**
     * This error is returned when there are duplicate legacy distinguished
     * names in Active Directory Domain Services (AD DS).
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DUPLICATE_LEGACY_DISTINGUISHED_NAME = 'ErrorDuplicateLegacyDistinguishedName';

    /**
     * This error indicates that there are duplicate SOAP headers.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const DUPLICATE_SOAP_HEADER = 'ErrorDuplicateSOAPHeader';

    /**
     * This error indicates that a duplicate user ID has been found in a
     * permission set, either Default or Anonymous are set more than once, or
     * there are duplicate SIDs or recipients.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DUPLICATE_USER_IDS = 'ErrorDuplicateUserIdsSpecified';

    /**
     * This error occurs during a CreateItem or UpdateItem operation when a
     * calendar item duration is longer than the maximum allowed, which is
     * currently 5 years.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DURATION_IS_TOO_LONG = 'ErrorCalendarDurationIsTooLong';

    /**
     * This error occurs when a request attempts to create/update the search
     * parameters of a search folder.
     *
     * For example, this can occur when a search folder is created in the
     * mailbox but the search folder is directed to look in another mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EMAIL_ADDRESS_MISMATCH = 'ErrorEmailAddressMismatch';

    /**
     * This error occurs when a calendar End time is set to the same time or
     * after the Start time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const END_DATE_IS_EARLIER_THAN_START_DATE = 'ErrorCalendarEndDateIsEarlierThanStartDate';

    /**
     * This error occurs when the operation failed because of communication
     * problems with Active Directory Domain Services (AD DS).
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ERROR_AD_OPERATION = 'ErrorADOperation';

    /**
     * This error occurs when a ResolveNames operation request specifies a name
     * that is not valid.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ERROR_AD_SESSION_FILTER = 'ErrorADSessionFilter';

    /**
     * Indicates an error in archive folder path creation.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const ERROR_ARCHIVE_FOLDER_PATH_CREATION = 'ErrorArchiveFolderPathCreation';

    /**
     * This error occurs when the event that is associated with a watermark is
     * deleted before the event is returned.
     *
     * When this error is returned, the subscription is also deleted.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EVENT_NOT_FOUND = 'ErrorEventNotFound';

    /**
     * This error indicates that there are more concurrent requests against the
     * server than are allowed by a user's policy.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEEDED_CONNECTION_COUNT = 'ErrorExceededConnectionCount';

    /**
     * This error indicates that a search operation call has exceeded the total
     * number of items that can be returned.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEEDED_FIND_COUNT = 'ErrorExceededFindCountLimit';

    /**
     * This error indicates that a user's throttling policy maximum subscription
     * count has been exceeded.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXCEEDED_SUBSCRIPTION_COUNT = 'ErrorExceededSubscriptionCount';

    /**
     * This error occurs if the GetEvents Operation is called as a subscription
     * is being deleted because it has expired.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const EXPIRED_SUBSCRIPTION = 'ErrorExpiredSubscription';

    /**
     * Indicates that the extension was not found.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const EXTENSION_NOT_FOUND = 'ErrorExtensionNotFound';

    /**
     * This error occurs when the folder is corrupted and cannot be saved.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_CORRUPT = 'ErrorFolderCorrupt';

    /**
     * This error occurs when an attempt is made to create a folder that has the
     * same name as another folder in the same parent.
     *
     * Duplicate folder names are not allowed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_EXISTS = 'ErrorFolderExists';

    /**
     * This error occurs when the specified folder for a FindItem operation with
     * a CalendarView element is not of calendar folder type.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_INVALID_FOR_CALENDAR_VIEW = 'ErrorCalendarFolderIsInvalidForCalendarView';

    /**
     * This error indicates that the folder ID that was specified does not
     * correspond to a valid folder, or that the delegate does not have
     * permission to access the folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_NOT_FOUND = 'ErrorFolderNotFound';

    /**
     * This error indicates that the requested property could not be retrieved.
     *
     * This does not indicate that the property does not exist, but that the
     * property was corrupted in some way so that the retrieval failed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_PROPERTY_REQUEST_FAILED = 'ErrorFolderPropertRequestFailed';

    /**
     * This error indicates that the folder could not be created or updated
     * because of an invalid state.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_SAVE_ERROR = 'ErrorFolderSave';

    /**
     * This error indicates that the folder could not be created or updated
     * because of an invalid state.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_SAVE_FAILED = 'ErrorFolderSaveFailed';

    /**
     * This error indicates that the folder could not be created or updated
     * because of invalid property values.
     *
     * The response code lists which properties caused the problem.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FOLDER_SAVE_PROPERTY_ERROR = 'ErrorFolderSavePropertyError';

    /**
     * This error indicates that the maximum group member count has been reached
     * for obtaining free/busy information for a distribution list.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FREE_BUSY_DL_LIMIT_REACHED = 'ErrorFreeBusyDLLimitReached';

    /**
     * This error is returned when free/busy information cannot be retrieved
     * because of an intervening failure.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const FREE_BUSY_GENERATION_FAILED = 'ErrorFreeBusyGenerationFailed';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const GET_SERVER_SECURITY_DESCRIPTOR_FAILED = 'ErrorGetServerSecurityDescriptorFailed';

    /**
     * This error is returned when new instant messaging (IM) contacts cannot be
     * added because the maximum number of contacts has been reached.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const IM_CONTACT_LIMIT_REACHED = 'ErrorImContactLimitReached';

    /**
     * This error is returned when an attempt is made to add a group display
     * name when an existing group already has the same display name.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const IM_GROUP_DISPLAY_NAME_EXISTS = 'ErrorImGroupDisplayNameAlreadyExists';

    /**
     * This error is returned when new IM groups cannot be added because the
     * maximum number of groups has been reached.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const IM_GROUP_LIMIT_REACHED = 'ErrorImGroupLimitReached';

    /**
     * The error is returned in the server-to-server authorization case for
     * Exchange Impersonation when the caller does not have the proper rights to
     * impersonate the specific user in question.
     *
     * This error maps to the ms-Exch-EPI-May-Impersonate extended Active
     * Directory right.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IMPERSONATE_USER_DENIED = 'ErrorImpersonateUserDenied';

    /**
     * This error is returned in the server-to-server authorization for Exchange
     * Impersonation when the caller does not have the proper rights to
     * impersonate through the Client Access server that they are making the
     * request against.
     *
     * This maps to the ms-Exch-EPI-Impersonation extended Active Directory
     * right.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IMPERSONATION_DENIED = 'ErrorImpersonationDenied';

    /**
     * This error indicates that there was an unexpected error when an attempt
     * was made to perform server-to-server authentication.
     *
     * This response code typically indicates either that the service account
     * that is running the Exchange Web Services application pool is configured
     * incorrectly, that Exchange Web Services cannot talk to the directory, or
     * that a trust between forests is not correctly configured.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IMPERSONATION_FAILED = 'ErrorImpersonationFailed';

    /**
     * This error MUST be returned if any rule does not validate.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INBOX_RULES_VALIDATION_ERROR = 'ErrorInboxRulesValidationError';

    /**
     * This error indicates that the request was valid for the current Exchange
     * Server version but was invalid for the request server version that was
     * specified.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INCORRECT_SCHEMA_VERSION = 'ErrorIncorrectSchemaVersion';

    /**
     * This error indicates that each change description in the UpdateItem or
     * UpdateFolder elements must list only one property to update.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INCORRECT_UPDATE_PROPERTY_COUNT = 'ErrorIncorrectUpdatePropertyCount';

    /**
     * This error occurs when the request contains too many attendees to
     * resolve. By default, the maximum number of attendees to resolve is 100.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INDIVIDUAL_MAILBOX_LIMIT_REACHED = 'ErrorIndividualMailboxLimitReached';

    /**
     * This error occurs when the mailbox server is overloaded. Try your request
     * again later.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INSUFFICIENT_RESOURCES = 'ErrorInsufficientResources';

    /**
     * This error indicates that Exchange Web Services encountered an error that
     * it could not recover from, and a more specific response code that is
     * associated with the error that occurred does not exist.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INTERNAL_SERVER_ERROR = 'ErrorInternalServerError';

    /**
     * This error indicates that an internal server error occurred and that you
     * should try your request again later.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INTERNAL_SERVER_TRANSIENT_ERROR = 'ErrorInternalServerTransientError';

    /**
     * This error indicates that the level of access that the caller has on the
     * free/busy data is invalid.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ACCESS_LEVEL = 'ErrorInvalidAccessLevel';

    /**
     * This error indicates that the requesting account is not a valid account
     * in the directory database.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_AD_ACCOUNT = 'ErrorCallerIsInvalidADAccount';

    /**
     * This error indicates an error caused by all invalid arguments passed to
     * the GetMessageTrackingReport Operation.
     *
     * This error is returned in the following scenarios:
     * - The user specified in the sending-as parameter does not exist in the
     *   directory.
     * - The user specified in the sending-as parameter is not unique in the
     *   directory.
     * - The sending-as address is empty.
     * - The sending-as address is not a valid e-mail address.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_ARGUMENT = 'ErrorInvalidArgument';

    /**
     * This error is returned by the GetAttachment Operation or the
     * DeleteAttachment Operation when an attachment that corresponds to the
     * specified ID is not found.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ATTACHMENT_ID = 'ErrorInvalidAttachmentId';

    /**
     * This error occurs when you try to bind to an existing search folder by
     * using a complex attachment table restriction.
     *
     * Exchange Web Services only supports simple contains filters against the
     * attachment table. If you try to bind to an existing search folder that
     * has a more complex attachment table restriction (a subfilter), Exchange
     * Web Services cannot render the XML for that filter and returns this
     * response code.
     *
     * Note that you can still call the GetFolder operation on the folder, but
     * do not request the SearchParameters property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ATTACHMENT_SUBFILTER = 'ErrorInvalidAttachmentSubfilter';

    /**
     * This error occurs when you try to bind to an existing search folder by
     * using a complex attachment table restriction.
     *
     * Exchange Web Services only supports simple contains filters against the
     * attachment table. If you try to bind to an existing search folder that
     * has a more complex attachment table restriction, Exchange Web Services
     * cannot render the XML for that filter. In this case, the attachment
     * subfilter contains a text filter, but it is not looking at the attachment
     * display name.
     *
     * Note that you can still call the GetFolder operation on the folder, but
     * do not request the SearchParameters property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ATTACHMENT_SUBFILTER_TEXT = 'ErrorInvalidAttachmentSubfilterTextFilter';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ATTRIBUTE_VALUE = 'ErrorCalendarInvalidAttributeValue';

    /**
     * This error indicates that the authorization procedure for the requester
     * failed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_AUTHORIZATION_CONTEXT = 'ErrorInvalidAuthorizationContext';

    /**
     * This error occurs when a consumer passes in a folder or item identifier
     * with a change key that cannot be parsed.
     *
     * For example, this could be invalid base64 content or an empty string.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_CHANGE_KEY = 'ErrorInvalidChangeKey';

    /**
     * This error indicates that a request to get a client access token was not
     * valid.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_CLIENT_ACCESS_TOKEN_REQUEST = 'ErrorInvalidClientAccessTokenRequest';

    /**
     * This error indicates that there was an internal error when an attempt was
     * made to resolve the identity of the caller.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_CLIENT_SECURITY_CONTEXT = 'ErrorInvalidClientSecurityContext';

    /**
     * This error is returned when an attempt is made to set the CompleteDate
     * element value of a task to a time in the future.
     *
     * When it is converted to the local time of the Client Access server, the
     * CompleteDate of a task cannot be set to a value that is later than the
     * local time on the Client Access server.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_COMPLETE_DATE = 'ErrorInvalidCompleteDate';

    /**
     * This error indicates that an invalid e-mail address was provided for a
     * contact.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_CONTACT_EMAIL_ADDRESS = 'ErrorInvalidContactEmailAddress';

    /**
     * This error indicates that an invalid e-mail index value was provided for
     * an e-mail entry.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_CONTACT_EMAIL_INDEX = 'ErrorInvalidContactEmailIndex';

    /**
     * This error occurs when the credentials that are used to proxy a request
     * to a different directory service forest fail authentication.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_CROSS_FOREST_CREDENTIALS = 'ErrorInvalidCrossForestCredentials';

    /**
     * This error occurs during a CreateItem or UpdateItem operation when
     * invalid values of Day, WeekendDay, and Weekday are used to define the
     * time change pattern.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_DAY_FOR_TIME_CHANGE_PATTERN = 'ErrorCalendarInvalidDayForTimeChangePattern';

    /**
     * This error occurs during a CreateItem or UpdateItem operation when
     * invalid values of Day, WeekDay, and WeekendDay are used to specify the
     * weekly recurrence.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_DAY_FOR_WEEKLY_RECURRENCE = 'ErrorCalendarInvalidDayForWeeklyRecurrence';

    /**
     * This error indicates that the specified folder permissions are invalid.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const INVALID_DELEGATE_PERMISSION = 'ErrorInvalidDelegatePermission';

    /**
     * This error indicates that the specified delegate user ID is invalid.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const INVALID_DELEGATE_USER_ID = 'ErrorInvalidDelegateUserId';

    /**
     * This error occurs when the bitmask that was passed into an Excludes
     * element restriction is unable to be parsed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_EXCLUDES_RESTRICTION = 'ErrorInvalidExcludesRestriction';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_EXPRESSION_TYPE_FOR_SUBFILTER = 'ErrorInvalidExpressionTypeForSubFilter';

    /**
     * This error occurs when the following events take place:
     * - The caller tries to use an extended property that is not supported by
     *   Exchange Web Services.
     * - The caller passes in an invalid combination of attribute values for an
     *   extended property. This also occurs if no attributes are passed. Only certain combinations are allowed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_EXTENDED_PROPERTY = 'ErrorInvalidExtendedProperty';

    /**
     * This error occurs when the value section of an extended property does not
     * match the type of the property.
     *
     * For example, setting an extended property that has PropertyType="String"
     * to an array of integers will result in this error. Any string
     * representation that is not coercible into the type that is specified for
     * the extended property will give this error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_EXTENDED_PROPERTY_VALUE = 'ErrorInvalidExtendedPropertyValue';

    /**
     * This error indicates that the sharing invitation sender did not create
     * the sharing invitation metadata.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_EXTERNAL_SHARING_INITIATOR = 'ErrorInvalidExternalSharingInitiator';

    /**
     * This error indicates that a sharing message is not intended for the
     * caller.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_EXTERNAL_SHARING_SUBSCRIBER = 'ErrorInvalidExternalSharingSubscriber';

    /**
     * This error indicates that the requester's organization federation objects
     * are not correctly configured.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_FEDERATED_ORGANIZATION_ID = 'ErrorInvalidFederatedOrganizationId';

    /**
     * This error occurs when the folder ID is corrupt.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_FOLDER_ID = 'ErrorInvalidFolderId';

    /**
     * This error indicates that the specified folder type is invalid for the
     * current operation.
     *
     * For example, you cannot create a Search folder in a public folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_FOLDER_TYPE_FOR_OPERATION = 'ErrorInvalidFolderTypeForOperation';

    /**
     * This error occurs in fractional paging when the user has specified one of
     * the following:
     * - A numerator that is greater than the denominator.
     * - A numerator that is less than zero.
     * - A denominator that is less than or equal to zero.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_FRACTIONAL_PAGING_PARAMS = 'ErrorInvalidFractionalPagingParameters';

    /**
     * This error occurs when the GetUserAvailability Operation is called with a
     * FreeBusyViewType of None.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_FREE_BUSY_VIEW_TYPE = 'ErrorInvalidFreeBusyViewType';

    /**
     * This error indicates that the DataType and ShareFolderId elements are
     * both present in a request.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_GET_SHARING_FOLDER_REQUEST = 'ErrorInvalidGetSharingFolderRequest';

    /**
     * This error indicates that the ID and/or change key is malformed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ID = 'ErrorInvalidId';

    /**
     * This error is returned when the specified IM contact identifier does not
     * represent a valid identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_ID_CONTACT_ID = 'ErrorInvalidImContactId';

    /**
     * This error occurs when the caller specifies an Id attribute that is
     * empty.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ID_EMPTY = 'ErrorInvalidIdEmpty';

    /**
     * This error indicates that a folder or item ID that is using the Exchange
     * 2007 format was specified for a request with a version of Exchange 2007
     * SP1 or later.
     *
     * You cannot use Exchange 2007 IDs in Exchange 2007 SP1 or later requests.
     * You have to use the ConvertId Operation to convert them first.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const INVALID_ID_MALFORMED_LEGACY_FORMAT = 'ErrorInvalidIdMalformedEwsLegacyIdFormat';

    /**
     * This error occurs when the caller specifies an Id attribute that is too
     * long.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ID_MONIKER_TOO_LONG = 'ErrorInvalidIdMonikerTooLong';

    /**
     * This error occurs when a contact in your mailbox is corrupt.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ID_RETURNED_BY_RESOLVE_NAMES = 'ErrorInvalidIdReturnedByResolveNames';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ID_XML = 'ErrorInvalidIdXml';

    /**
     * This error is returned when the specified IM distribution group SMTP
     * address identifier does not represent a valid identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_IM_DISTRIBUTION_GROUP_SMTP_ADDRESS = 'ErrorInvalidImDistributionGroupSmtpAddress';

    /**
     * This error is returned when the specified IM group identifier does not
     * represent a valid identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_IM_GROUP_ID = 'ErrorInvalidImGroupId';

    /**
     * This error occurs during Exchange Impersonation when a caller does not
     * specify a UPN, an e-mail address, or a user SID.
     *
     * This will also occur if the caller specifies one or more of those and the
     * values are empty.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_IMPERSONATION_HEADER_DATA = 'ErrorInvalidExchangeImpersonationHeaderData';

    /**
     * This error occurs if the offset for indexed paging is negative.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_INDEXED_PAGING_PARAMS = 'ErrorInvalidIndexedPagingParameters';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_INTERNET_HEADER_CHILD_NODES = 'ErrorInvalidInternetHeaderChildNodes';

    /**
     * This error occurs when an attempt is made to use an AcceptItem operation
     * for an item type other than a meeting request or a calendar item, or when
     * an attempt is made to accept a calendar item occurrence that is in the
     * Deleted Items folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_ACCEPT_ITEM = 'ErrorInvalidItemForOperationAcceptItem';

    /**
     * Indicates that the item was invalid for an ArchiveItem operation.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_ITEM_FOR_ARCHIVE_ITEM = 'ErrorInvalidItemForOperationArchiveItem';

    /**
     * This error occurs when an attempt is made to use a CancelItem operation
     * on an item type other than a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_CANCEL_ITEM = 'ErrorInvalidItemForOperationCancelItem';

    /**
     * This error is returned when an attempt is made to create an item
     * attachment of an unsupported type.
     *
     * Supported item types for item attachments include the following objects:
     * - ItemType
     * - MessageType
     * - CalendarItemType
     * - TaskType
     * - ContactItemType
     *
     * For example, if you try to create a MeetingMessage attachment, you will
     * encounter this response code.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_CREATE_ATTACHMENT = 'ErrorInvalidItemForOperationCreateItemAttachment';

    /**
     * This error is returned from a CreateItem Operation if the request
     * contains an unsupported item type.
     *
     * Supported items include the following objects:
     * - ItemType
     * - MessageType
     * - CalendarItemType
     * - TaskType
     * - ContactItemType
     *
     * Certain types are created as a side effect of doing something else.
     * MeetingMessages, for example, are created when you send a calendar item
     * to attendees; they are not explicitly created.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_CREATE_ITEM = 'ErrorInvalidItemForOperationCreateItem';

    /**
     * This error occurs when an attempt is made to use a DeclineItem operation
     * for an item type other than a meeting request or a calendar item, or when
     * an attempt is made to decline a calendar item occurrence that is in the
     * Deleted Items folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_DECLINE_ITEM = 'ErrorInvalidItemForOperationDeclineItem';

    /**
     * This error indicates that the ExpandDL Operation is valid only for
     * private distribution lists.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const INVALID_ITEM_FOR_EXPAND_DISTRIBUTION_LIST = 'ErrorInvalidItemForOperationExpandDL';

    /**
     * This error is returned from a RemoveItem operation if the request
     * specifies an item that is not a meeting cancellation item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_REMOVE_ITEM = 'ErrorInvalidItemForOperationRemoveItem';

    /**
     * This error is returned from a SendItem Operation if the request specifies
     * an item that is not a message item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_SEND_ITEM = 'ErrorInvalidItemForOperationSendItem';

    /**
     * This error occurs when an attempt is made to use TentativelyAcceptItem
     * for an item type other than a meeting request or a calendar item, or when
     * an attempt is made to tentatively accept a calendar item occurrence that
     * is in the Deleted Items folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ITEM_FOR_TENTATIVE = 'ErrorInvalidItemForOperationTentative';

    /**
     * This error is for internal use only.
     *
     * This error is not returned.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_LOGON_TYPE = 'ErrorInvalidLogonType';

    /**
     * This error indicates that the CreateItem Operation or the UpdateItem
     * Operation failed while creating or updating a personal distribution list.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_MAILBOX = 'ErrorInvalidMailbox';

    /**
     * This error occurs when the structure of the managed folder is corrupted
     * and cannot be rendered.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_MANAGED_FOLDER_PROPERTY = 'ErrorInvalidManagedFolderProperty';

    /**
     * This error occurs when the quota that is set on the managed folder is
     * less than zero, which indicates a corrupted managed folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_MANAGED_FOLDER_QUOTE = 'ErrorInvalidManagedFolderQuota';

    /**
     * This error occurs when the size that is set on the managed folder is less
     * than zero, which indicates a corrupted managed folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_MANAGED_FOLDER_SIZE = 'ErrorInvalidManagedFolderSize';

    /**
     * This error is returned if the ManagementRole header in the SOAP header is
     * incorrect.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_MANAGEMENT_ROLE_HEADER = 'ErrorInvalidManagementRoleHeader';

    /**
     * This error occurs when the supplied merged free/busy internal value is
     * invalid.
     *
     * The default minimum value is 5 minutes. The default maximum value is
     * 1440 minutes.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_MERGED_FREE_BUSY_INTERVAL = 'ErrorInvalidMergedFreeBusyInterval';

    /**
     * This error occurs when the name is invalid for the ResolveNames
     * Operation.
     *
     * For example, a zero length string, a single space, a comma, and a dash
     * are all invalid names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_NAME_FOR_NAME_RESOLUTION = 'ErrorInvalidNameForNameResolution';

    /**
     * This error indicates an error in the Network Service account on the
     * Client Access server.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_NETWORK_SERVICE_CONTEXT = 'ErrorInvalidNetworkServiceContext';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_OOF_PARAMETER = 'ErrorInvalidOofParameter';

    /**
     * This is a general error that is used when the requested operation is
     * invalid.
     *
     * For example, you cannot do the following:
     * - Perform a “Deep” traversal by using the FindFolder Operation on a
     *   public folder.
     * - Move or copy the public folder root.
     * - Delete an associated item by using any mode except “Hard” delete.
     * - Move or copy an associated item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_OPERATION = 'ErrorInvalidOperation';

    /**
     * This error indicates that a caller requested free/busy information for a
     * user in another organization but the organizational relationship does not
     * have free/busy enabled.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_ORG_RELATION_FOR_FREE_BUSY = 'ErrorInvalidOrganizationRelationshipForFreeBusy';

    /**
     * This error occurs when a consumer passes in a zero or a negative value
     * for the maximum rows to be returned.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PAGING_MAX_ROWS = 'ErrorInvalidPagingMaxRows';

    /**
     * This error occurs when a consumer passes in an invalid parent folder for
     * an operation.
     *
     * For example, this error is returned if you try to create a folder within
     * a search folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PARENT_FOLDER = 'ErrorInvalidParentFolder';

    /**
     * This error is returned when an attempt is made to set a task completion
     * percentage to an invalid value.
     *
     * The value must be between 0 and 100 (inclusive).
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PERCENT_COMPLETE = 'ErrorInvalidPercentCompleteValue';

    /**
     * This error indicates that the permission level is inconsistent with the
     * permission settings.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PERMISSION_SETTINGS = 'ErrorInvalidPermissionSettings';

    /**
     * This error indicates that the caller identifier is not valid.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_PHONE_CALL_ID = 'ErrorInvalidPhoneCallId';

    /**
     * This error indicates that the telephone number is not correct or does not
     * fit the dial plan rules.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_PHONE_NUMBER = 'ErrorInvalidPhoneNumber';

    /**
     * This error is returned if an invalid photo size is requested from the
     * server.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_PHOTO_SIZE = 'ErrorInvalidPhotoSize';

    /**
     * This error occurs when the property that you are trying to append to does
     * not support appending.
     *
     * The following are the only properties that support appending:
     * - Recipient collections (ToRecipients, CcRecipients, BccRecipients)
     * - Attendee collections (RequiredAttendees, OptionalAttendees, Resources)
     * - Body
     * - ReplyTo
     *
     * In addition, this error occurs when a message body is appended if the
     * format specified in the request does not match the format of the item in
     * the store.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_APPEND = 'ErrorInvalidPropertyAppend';

    /**
     * This error occurs if the delete operation is specified in an UpdateItem
     * Operation or UpdateFolder Operation call for a property that does not
     * support the delete operation.
     *
     * For example, you cannot delete the ItemId property of the ItemType
     * object.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_DELETE = 'ErrorInvalidPropertyDelete';

    /**
     * This error occurs if the consumer passes in one of the flag properties in
     * an Exists filter.
     *
     * For example, this error occurs if the IsRead or IsFromMe flags are
     * specified in the Exists element. The request should use the IsEqualTo
     * element instead for these as they are flags and therefore part of a
     * single property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_FOR_EXISTS = 'ErrorInvalidPropertyForExists';

    /**
     * This error occurs when the property that you are trying to manipulate
     * does not support the operation that is being performed on it.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_FOR_OPERATION = 'ErrorInvalidPropertyForOperation';

    /**
     * This error occurs if a property that is specified in the request is not
     * available for the item type.
     *
     * For example, this error is returned if a property that is only available
     * on calendar items is requested in a GetItem Operation call for a message
     * or is updated in an UpdateItem Operation call for a message.
     *
     * This occurs in the following operations:
     * - GetItem Operation
     * - GetFolder Operation
     * - UpdateItem Operation
     * - UpdateFolder Operation
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_REQUEST = 'ErrorInvalidPropertyRequest';

    /**
     * This error indicates that the property that you are trying to manipulate
     * does not support the operation that is being performed on it.
     *
     * For example, this error is returned if the property that you are trying
     * to set is read-only.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_SET = 'ErrorInvalidPropertySet';

    /**
     * This error occurs when the state of a calendar item recurrence binary
     * large object (BLOB) in the Exchange store is invalid.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_STATE = 'ErrorCalendarInvalidPropertyState';

    /**
     * This error occurs during an UpdateItem Operation when a client tries to
     * update certain properties of a message that has already been sent.
     *
     * For example, the following properties cannot be updated on a sent
     * message:
     * - IsReadReceiptRequested
     * - IsDeliveryReceiptRequested
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_UPDATE_SENT_MESSAGE = 'ErrorInvalidPropertyUpdateSentMessage';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROPERTY_VALUE = 'ErrorCalendarInvalidPropertyValue';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PROXY_SECURITY_CONTEXT = 'ErrorInvalidProxySecurityContext';

    /**
     * This error occurs if you call the GetEvents Operation or the Unsubscribe
     * Operation by using a push subscription ID.
     *
     * To unsubscribe from a push subscription, you must respond to a push
     * request with an unsubscribe response, or disconnect your Web service and
     * wait for the push notifications to time out.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PULL_SUBSCRIPTION_ID = 'ErrorInvalidPullSubscriptionId';

    /**
     * This error is returned by the Subscribe Operation when it creates a
     * "push" subscription and indicates that the URL that is included in the
     * request is invalid.
     *
     * The following conditions must be met for Exchange Web Services to accept
     * the URL:
     * - String length > 0 and < 2083.
     * - Protocol is http or https.
     * - The URL can be parsed by the URI Microsoft .NET Framework class.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_PUSH_SUBSCRIPTION_URL = 'ErrorInvalidPushSubscriptionUrl';

    /**
     * This error indicates that the search folder has a recipient table filter
     * that Exchange Web Services cannot represent.
     *
     * To get around this error, retrieve the folder without requesting the
     * search parameters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_RECIPIENT_SUBFILTER = 'ErrorInvalidRecipientSubfilter';

    /**
     * This error indicates that the search folder has a recipient table filter
     * that Exchange Web Services cannot represent.
     *
     * To get around this error, retrieve the folder without requesting the
     * search parameters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_RECIPIENT_SUBFILTER_COMPARISON = 'ErrorInvalidRecipientSubfilterComparison';

    /**
     * This error indicates that the search folder has a recipient table filter
     * that Exchange Web Services cannot represent.
     *
     * To get around this error, retrieve the folder without requesting the
     * search parameters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_RECIPIENT_SUBFILTER_ORDER = 'ErrorInvalidRecipientSubfilterOrder';

    /**
     * This error indicates that the search folder has a recipient table filter
     * that Exchange Web Services cannot represent.
     *
     * To get around this error, retrieve the folder without requesting the
     * search parameters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_RECIPIENT_SUBFILTER_TEXT_FILTER = 'ErrorInvalidRecipientSubfilterTextFilter';

    /**
     * This error indicates that the recipient collection on your message or the
     * attendee collection on your calendar item is invalid.
     *
     * For example, this error will be returned when an attempt is made to send
     * an item that has no recipients.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_RECIPIENTS = 'ErrorInvalidRecipients';

    /**
     * This error occurs when the specified recurrence cannot be created.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_RECURRENCE = 'ErrorCalendarInvalidRecurrence';

    /**
     * This error is returned from the CreateItem Operation for Forward and
     * Reply response objects when the referenced item is invalid.
     *
     * For example, this error may be returned in any of the following
     * circumstances:
     * - The referenced item identifier is not a Message, a CalendarItem, or a
     *   descendant of a Message or CalendarItem.
     * - The reference item identifier is for a CalendarItem and the organizer
     *   is trying to Reply or ReplyAll to himself.
     * - The message is a draft and Reply or ReplyAll is selected.
     * - The reference item, for SuppressReadReceipt, is not a Message or a
     *   descendant of a Message.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_REFERENCE_ITEM = 'ErrorInvalidReferenceItem';

    /**
     * This error occurs when the SOAP request has a SOAP action header, but
     * nothing in the SOAP body.
     *
     * Note that the SOAP Action header is not required as Exchange Web Services
     * can determine the method to call from the local name of the root element
     * in the SOAP body.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_REQUEST = 'ErrorInvalidRequest';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_RESTRICTION = 'ErrorInvalidRestriction';

    /**
     * Indicates that the retention tag GUID was invalid.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_RETENTION_TAG_ID_GUID = 'ErrorInvalidRetentionTagIdGuid';

    /**
     * This error is returned when an attempt is made to set an implicit tag on
     * the PolicyTag property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_RETENTION_TAG_INHERITANCE = 'ErrorInvalidRetentionTagInheritance';

    /**
     * This error is returned when an attempt is made to set a nonexistent or
     * invisible tag on a PolicyTag property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_RETENTION_TAG_INVISIBLE = 'ErrorInvalidRetentionTagInvisible';

    /**
     * This error indicates that no retention tags were found for this user.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_RETENTION_TAG_NONE = 'ErrorInvalidRetentionTagNone';

    /**
     * This error is returned when the specified retention tag has an incorrect
     * action associated with it.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const INVALID_RETENTION_TAG_TYPE_MISMATCH = 'ErrorInvalidRetentionTagTypeMismatch';

    /**
     * This error occurs if the routing type that is passed for an
     * EmailAddressType is invalid.
     *
     * Typically, the routing type is set to Simple Mail Transfer Protocol
     * (SMTP).
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_ROUTING_TYPE = 'ErrorInvalidRoutingType';

    /**
     * This error occurs if the specified duration end time is not greater than
     * the start time, or if the end time does not occur in the future.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SCHEDULED_OOF_DURATION = 'ErrorInvalidScheduledOofDuration';

    /**
     * This error indicates that a proxy request that was sent to another server
     * is not able to service the request due to a versioning mismatch.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_SCHEMA_VERSION_FOR_MAILBOX_VERSION = 'ErrorInvalidSchemaVersionForMailboxVersion';

    /**
     * This error indicates that the Exchange security descriptor on the
     * Calendar folder in the store is corrupted.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SECURITY_DESCRIPTOR = 'ErrorInvalidSecurityDescriptor';

    /**
     * This error occurs during an attempt to send an item where the
     * SavedItemFolderId is specified in the request but the SaveItemToFolder
     * property is set to false.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SEND_ITEM_SAVE_SETTINGS = 'ErrorInvalidSendItemSaveSettings';

    /**
     * This error indicates that the token that was passed in the header is
     * malformed, does not refer to a valid account in the directory, or is
     * missing the primary group ConnectingSID.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SERIALIZED_ACCESS_TOKEN = 'ErrorInvalidSerializedAccessToken';

    /**
     * This error indicates that an invalid request server version was specified
     * in the request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SERVER_VERSION = 'ErrorInvalidServerVersion';

    /**
     * This error indicates that the sharing metadata is not valid.
     *
     * This can be caused by invalid XML.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_SHARING_DATA = 'ErrorInvalidSharingData';

    /**
     * This error indicates that the sharing message is not valid.
     *
     * This can be caused by a missing property.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_SHARING_MESSAGE = 'ErrorInvalidSharingMessage';

    /**
     * This error occurs when an invalid SID is passed in a request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SID = 'ErrorInvalidSid';

    /**
     * This error indicates that the SIP name, dial plan, or the phone number
     * are invalid SIP URI.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const INVALID_SIP_URI = 'ErrorInvalidSIPUri';

    /**
     * This error occurs when the SMTP address cannot be parsed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SMTP_ADDRESS = 'ErrorInvalidSmtpAddress';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SUBFILTER_TYPE = 'ErrorInvalidSubfilterType';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SUBFILTER_TYPE_NOT_ATTENDEE_TYPE = 'ErrorInvalidSubfilterTypeNotAttendeeType';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SUBFILTER_TYPE_NOT_RECIPIENT_TYPE = 'ErrorInvalidSubfilterTypeNotRecipientType';

    /**
     * This error indicates that the subscription is no longer valid.
     *
     * This could be because the Client Access server is restarting or because
     * the subscription is expired.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SUBSCRIPTION = 'ErrorInvalidSubscription';

    /**
     * This error indicates that the subscribe request included multiple public
     * folder IDs.
     *
     * A subscription can include multiple folders from the same mailbox or one
     * public folder ID.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SUBSCRIPTION_REQUEST = 'ErrorInvalidSubscriptionRequest';

    /**
     * This error is returned by SyncFolderItems or SyncFolderHierarchy if the
     * SyncState data that is passed is invalid.
     *
     * To fix this error, you must resynchronize without the sync state. Make
     * sure that if you are persisting sync state BLOBs, you are not
     * accidentally truncating the BLOB.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_SYNC_STATE_DATA = 'ErrorInvalidSyncStateData';

    /**
     * This error indicates that the specified time interval is invalid.
     *
     * The start time must be greater than or equal to the end time.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_TIME_INTERVAL = 'ErrorInvalidTimeInterval';

    /**
     * This error occurs when an invalid time zone is encountered.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_TIMEZONE = 'ErrorCalendarInvalidTimeZone';

    /**
     * This error indicates that an internally inconsistent UserId was specified
     * for a permissions operation.
     *
     * For example, if a distinguished user ID is specified (Default or
     * Anonymous), this error is returned if you also try to specify a SID, or
     * primary SMTP address or display name for this user.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_USER_INFO = 'ErrorInvalidUserInfo';

    /**
     * This error indicates that the user Out of Office (OOF) settings are
     * invalid because of a missing internal or external reply.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_USER_OOF_SETTINGS = 'ErrorInvalidUserOofSettings';

    /**
     * This error occurs during Exchange Impersonation.
     *
     * The caller passed in an invalid UPN in the SOAP header that was not
     * accessible in the directory.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_USER_PRINCIPAL_NAME = 'ErrorInvalidUserPrincipalName';

    /**
     * This error occurs when an invalid SID is passed in a request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_USER_SID = 'ErrorInvalidUserSid';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_USER_SID_MISSING_UPN = 'ErrorInvalidUserSidMissingUPN';

    /**
     * This error indicates that the comparison value in the restriction is
     * invalid for the property you are comparing against.
     *
     * For example, the comparison value of DateTimeCreated > true would return
     * this response code. This response code is also returned if you specify an
     * enumeration property in the comparison, but the value that you are
     * comparing against is not a valid value for that enumeration.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_VALUE_FOR_PROPERTY = 'ErrorInvalidValueForProperty';

    /**
     * This error is caused by an invalid watermark.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const INVALID_WATERMARK = 'ErrorInvalidWatermark';

    /**
     * This error indicates that a valid VoIP gateway is not available.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const IP_GATEWAY_NOT_FOUND = 'ErrorIPGatewayNotFound';

    /**
     * This error indicates that conflict resolution was unable to resolve
     * changes for the properties.
     *
     * The items in the store may have been changed and have to be updated.
     * Retrieve the updated change key and try again.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IRRESOLVABLE_CONFLICT = 'ErrorIrresolvableConflict';

    /**
     * This error indicates that the AcceptItem element is invalid for a
     * calendar item that has been cancelled.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_CANCELLED_FOR_ACCEPT = 'ErrorCalendarIsCancelledForAccept';

    /**
     * This error indicates that the DeclineItem element is invalid for a
     * calendar item that has been cancelled.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_CANCELLED_FOR_DECLINE = 'ErrorCalendarIsCancelledForDecline';

    /**
     * This error indicates that the RemoveItem element is invalid for a
     * calendar item that has been cancelled.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_CANCELLED_FOR_REMOVE = 'ErrorCalendarIsCancelledForRemove';

    /**
     * This error indicates that the TentativelyAcceptItem element is invalid
     * for a calendar item that has been cancelled.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ITEM_CANCELLED_FOR_TENTATIVE = 'ErrorCalendarIsCancelledForTentative';

    /**
     * This error indicates that the state of the object is corrupted and cannot
     * be retrieved.
     *
     * When you are retrieving an item, only certain properties will be in this
     * state, such as Body and MimeContent. Omit these properties and retry the
     * operation.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_CORRUPT = 'ErrorItemCorrupt';

    /**
     * This error indicates that the AcceptItem element is invalid for a
     * calendar item or meeting request in a delegated scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ITEM_DELEGATED_FOR_ACCEPT = 'ErrorCalendarIsDelegatedForAccept';

    /**
     * This error indicates that the DeclineItem element is invalid for a
     * calendar item or meeting request in a delegated scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ITEM_DELEGATED_FOR_DECLINE = 'ErrorCalendarIsDelegatedForDecline';

    /**
     * This error indicates that the RemoveItem element is invalid for a meeting
     * cancellation in a delegated scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ITEM_DELEGATED_FOR_REMOVE = 'ErrorCalendarIsDelegatedForRemove';

    /**
     * This error indicates that the TentativelyAcceptItem element is invalid
     * for a calendar item or meeting request in a delegated scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const ITEM_DELEGATED_FOR_TENTATIVE = 'ErrorCalendarIsDelegatedForTentative';

    /**
     * This error occurs when the item was not found or you do not have
     * permission to access the item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_NOT_FOUND = 'ErrorItemNotFound';

    /**
     * This error occurs if a property request on an item fails. The property
     * may exist, but it could not be retrieved.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_PROPERTY_REQUEST_FAILED = 'ErrorItemPropertyRequestFailed';

    /**
     * This error occurs when attempts to save the item or folder fail.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_SAVE = 'ErrorItemSave';

    /**
     * This error occurs when attempts to save the item or folder fail because
     * of invalid property values.
     *
     * The response code includes the path of the invalid properties.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ITEM_SAVE_PROPERTY_ERROR = 'ErrorItemSavePropertyError';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LEGACY_MAILBOX_FREE_BUSY_VIEW_TYPE_NOT_MERGED = 'ErrorLegacyMailboxFreeBusyViewTypeNotMerged';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LOCAL_SERVER_OBJECT_NOT_FOUND = 'ErrorLocalServerObjectNotFound';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const LOCATION_SERVICES_DISABLED = 'ErrorLocationServicesDisabled';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const LOCATION_SERVICES_INVALID_REQUEST = 'ErrorLocationServicesInvalidRequest';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const LOCATION_SERVICES_REQUEST_FAILED = 'ErrorLocationServicesRequestFailed';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const LOCATION_SERVICES_REQUEST_TIMED_OUT = 'ErrorLocationServicesRequestTimedOut';

    /**
     * This error indicates that the Availability service was unable to log on
     * as the network service to proxy requests to the appropriate sites or
     * forests.
     *
     * This response typically indicates a configuration error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LOGON_AS_NETWORK_SERVICE_FAILED = 'ErrorLogonAsNetworkServiceFailed';

    /**
     * This error occurs if the MailboxData information cannot be mapped to a
     * valid mailbox account.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAIL_RECIPIENT_NOT_FOUND = 'ErrorMailRecipientNotFound';

    /**
     * This error indicates that mail tips are disabled.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MAIL_TIPS_DISABLED = 'ErrorMailTipsDisabled';

    /**
     * This error indicates that the mailbox information in AD DS is configured
     * incorrectly.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAILBOX_CONFIGURATION_ERROR = 'ErrorMailboxConfiguration';

    /**
     * This error indicates that the MailboxDataArray property in the request is
     * empty.
     *
     * You must supply at least one mailbox identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAILBOX_DATA_ARRAY_EMPTY = 'ErrorMailboxDataArrayEmpty';

    /**
     * This error occurs when more than 100 entries are supplied in a
     * MailboxDataArray.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAILBOX_DATA_ARRAY_TOO_BIG = 'ErrorMailboxDataArrayTooBig';

    /**
     * This error indicates that an attempt to access a mailbox failed because
     * the mailbox is in a failover process.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MAILBOX_FAILOVER = 'ErrorMailboxFailover';

    /**
     * Indicates that the mailbox hold was not found.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MAILBOX_HOLD_NOT_FOUND = 'ErrorMailboxHoldNotFound';

    /**
     * This error occurs when the connection to the mailbox to get the calendar
     * view information failed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAILBOX_LOGON_FAILED = 'ErrorMailboxLogonFailed';

    /**
     * This error indicates that the mailbox is being moved to a different
     * mailbox store or server.
     *
     * This error can also indicate that the mailbox is on another server or
     * mailbox database.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAILBOX_MOVE_IN_PROGRESS = 'ErrorMailboxMoveInProgress';

    /**
     * This error is returned when a scoped search attempt is performed without
     * using a QueryString (QueryStringType) element for a content indexing
     * search.
     *
     * This is applicable to the SearchMailboxes and FindConversation
     * operations.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MAILBOX_SCOPE_NOT_ALLOWED_WITHOUT_QUERY_STRING = 'ErrorMailboxScopeNotAllowedWithoutQueryString';

    /**
     * This error indicates that the mailbox store is unavailable for one of
     * several reasons.
     *
     * These reasons include:
     * - The mailbox store is corrupt.
     * - The mailbox store is being stopped.
     * - The mailbox store is offline.
     * - A network error occurred when an attempt was made to access the mailbox
     *   store.
     * - The mailbox store is overloaded and cannot accept any more connections.
     * - The mailbox store has been paused.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAILBOX_STORE_UNAVAILABLE = 'ErrorMailboxStoreUnavailable';

    /**
     * This error occurs when the caller specifies an Id attribute that is
     * malformed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MALFORMED_ID = 'ErrorInvalidIdMalformed';

    /**
     * This error occurs if the managed folder that you are trying to create
     * already exists in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MANAGED_FOLDER_ALREADY_EXISTS = 'ErrorManagedFolderAlreadyExists';

    /**
     * This error occurs when the folder name that was specified in the request
     * does not map to a managed folder definition in AD DS.
     *
     * You can only create instances of managed folders for folders that are
     * defined in AD DS. Check the name and try again.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MANAGED_FOLDER_NOT_FOUND = 'ErrorManagedFolderNotFound';

    /**
     * This error indicates that the managed folders root was deleted from the
     * mailbox or that a folder exists in the same parent folder that has the
     * name of the managed folder root.
     *
     * This will also occur if the attempt to create the root managed folder
     * fails.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MANAGED_FOLDERS_ROOT_FAILURE = 'ErrorManagedFoldersRootFailure';

    /**
     * This error indicates that a meeting request is out-of-date and cannot be
     * updated.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_REQUEST_OUT_OF_DATE = 'ErrorCalendarMeetingRequestIsOutOfDate';

    /**
     * This error indicates that the suggestions engine encountered a problem
     * when it was trying to generate the suggestions.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MEETING_SUGGESTION_GENERATION_FAILED = 'ErrorMeetingSuggestionGenerationFailed';

    /**
     * This error occurs if the MessageDisposition attribute is not set.
     *
     * This attribute is required for the following:
     * - The CreateItem Operation and the UpdateItem Operation when the item
     *   being created or updated is a Message.
     * - CancelCalendarItem, AcceptItem, DeclineItem, or TentativelyAcceptItem
     *   response objects.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_DISPOSITION_REQUIRED = 'ErrorMessageDispositionRequired';

    /**
     * This error indicates that the message that you are trying to send exceeds
     * the allowed limits.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MESSAGE_SIZE_EXCEEDED = 'ErrorMessageSizeExceeded';

    /**
     * This error indicates that the given domain cannot be found.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MESSAGE_TRACKING_NO_SUCH_DOMAIN = 'ErrorMessageTrackingNoSuchDomain';

    /**
     * This error indicates that the message tracking service cannot track the
     * message.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MESSAGE_TRACKING_PERMANENT_ERROR = 'ErrorMessageTrackingPermanentError';

    /**
     * This error indicates that the message tracking service is either down or
     * busy.
     *
     * This error code indicates a transient error. Clients can retry to connect
     * to the server when this error is received.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MESSAGE_TRACKING_TRANSIENT_ERROR = 'ErrorMessageTrackingTransientError';

    /**
     * This error occurs when the MIME content is not a valid iCal for a
     * CreateItem Operation.
     *
     * For a GetItem Operation, this response indicates that the MIME content
     * could not be generated.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MIME_CONTENT_CONVERSATION_FAILED = 'ErrorMimeContentConversionFailed';

    /**
     * This error occurs when the MIME content is invalid.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MIME_CONTENT_INVALID = 'ErrorMimeContentInvalid';

    /**
     * This error occurs when the MIME content in the request is not a valid
     * base 64 string.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MIME_CONTENT_INVALID_BASE_64_STRING = 'ErrorMimeContentInvalidBase64String';

    /**
     * This error MUST be returned when event notifications are missed.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MISSED_NOTIFICATION_EVENTS = 'ErrorMissedNotificationEvents';

    /**
     * This error indicates that a required argument was missing from the
     * request.
     *
     * The response message text indicates which argument to check.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_ARGUMENT = 'ErrorMissingArgument';

    /**
     * This error indicates that you specified a distinguished folder ID in the
     * request, but the account that made the request does not have a mailbox on
     * the system.
     *
     * In that case, you must supply a Mailbox sub-element under
     * DistinguishedFolderId.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_EMAIL_ADDRESS = 'ErrorMissingEmailAddress';

    /**
     * This error indicates that you specified a distinguished folder ID in the
     * request, but the account that made the request does not have a mailbox on
     * the system.
     *
     * In that case, you must supply a Mailbox sub-element under
     * DistinguishedFolderId. This response is returned from the
     * CreateManagedFolder Operation.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_EMAIL_ADDRESS_FOR_MANAGED_FOLDER = 'ErrorMissingEmailAddressForManagedFolder';

    /**
     * This error occurs if the EmailAddress element is missing.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_INFORMATION_EMAIL_ADDRESS = 'ErrorMissingInformationEmailAddress';

    /**
     * This error occurs if the ReferenceItemId is missing.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_INFORMATION_REFERENCE_ITEM_ID = 'ErrorMissingInformationReferenceItemId';

    /**
     * This error code is never returned.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const MISSING_INFORMATION_SHARING_FOLDER_ID = 'ErrorMissingInformationSharingFolderId';

    /**
     * This error is returned when an attempt is made to not include the item
     * element in the ItemAttachment element of a CreateAttachment Operation
     * request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_ITEM_FOR_CREATE_ITEM_ATTACHMENT = 'ErrorMissingItemForCreateItemAttachment';

    /**
     * This error occurs when the policy IDs property, property tag 0x6732, for
     * the folder is missing.
     *
     * You should consider this a corrupted folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_MANAGED_FOLDER_ID = 'ErrorMissingManagedFolderId';

    /**
     * This error indicates that you tried to send an item without including
     * recipients.
     *
     * Note that if you call the CreateItem Operation with a message disposition
     * that causes the message to be sent, you will get the following response
     * code: ErrorInvalidRecipients.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_RECIPIENTS = 'ErrorMissingRecipients';

    /**
     * This error indicates that a UserId has not been fully specified in a
     * permissions set.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MISSING_USER_ID_INFORMATION = 'ErrorMissingUserIdInformation';

    /**
     * This error indicates that you have specified more than one
     * ExchangeImpersonation property value within a request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MORE_THAN_ONE_ACCESS_MODE_SPECIFIED = 'ErrorMoreThanOneAccessModeSpecified';

    /**
     * This error indicates that the move or copy operation failed.
     *
     * Moving occurs in the CreateItem Operation when you accept a meeting
     * request that is in the Deleted Items folder. In addition, if you decline
     * a meeting request, cancel a calendar item, or remove a meeting from your
     * calendar, it is moved to the Deleted Items folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MOVE_COPY_FAILED = 'ErrorMoveCopyFailed';

    /**
     * This error occurs if you try to move a distinguished folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MOVE_DISTINGUISHED_FOLDER = 'ErrorMoveDistinguishedFolder';

    /**
     * This error occurs when a request attempts to access multiple mailbox
     * servers.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const MULTI_LEGACY_MAILBOX_ACCESS = 'ErrorMultiLegacyMailboxAccess';

    /**
     * This error occurs if the ResolveNames Operation returns more than one
     * result or the ambiguous name that you specified matches more than one
     * object in the directory.
     *
     * The response code includes the matched names in the response data.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NAME_RESOLUTION_MULTIPLE_RESULTS = 'ErrorNameResolutionMultipleResults';

    /**
     * This error indicates that the caller does not have a mailbox on the
     * system.
     *
     * The ResolveNames Operation or ExpandDL Operation is invalid for
     * connecting a user without a mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NAME_RESOLUTION_NO_MAILBOX = 'ErrorNameResolutionNoMailbox';

    /**
     * This error indicates that the ResolveNames Operation returns no results.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NAME_RESOLUTION_NO_RESULTS = 'ErrorNameResolutionNoResults';

    /**
     * This error MUST be returned to the first subscription connection if a
     * second subscription connection is opened.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NEW_EVENT_STREAM_CONNECTION_OPENED = 'ErrorNewEventStreamConnectionOpened';

    /**
     * This error code MUST be returned when the Web service cannot find a
     * server to handle the request.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NO_APPLICABLE_PROXY_CAS_SERVERS_AVAILABLE = 'ErrorNoApplicableProxyCASServersAvailable';

    /**
     * This error occurs if there is no Calendar folder for the mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_CALENDAR = 'ErrorNoCalendar';

    /**
     * This error indicates that the request referred to a mailbox in another
     * Active Directory site, but no Client Access servers in the destination
     * site were configured for Windows Authentication, and therefore the
     * request could not be proxied.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_DESTINATION_CAS_DUE_TO_KERBEROS_REQUIREMENTS = 'ErrorNoDestinationCASDueToKerberosRequirements';

    /**
     * This error indicates that the request referred to a mailbox in another
     * Active Directory site, but no Client Access servers in the destination
     * site were configured for SSL connections, and therefore the request could
     * not be proxied.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_DESTINATION_CAS_DUE_TO_SSL_REQUIREMENTS = 'ErrorNoDestinationCASDueToSSLRequirements';

    /**
     * This error indicates that the request referred to a mailbox in another
     * Active Directory site, but no Client Access servers in the destination
     * site were of an acceptable product version to receive the request, and
     * therefore the request could not be proxied.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_DESTINATION_CAS_DUE_TO_VERSION_MISMATCH = 'ErrorNoDestinationCASDueToVersionMismatch';

    /**
     * No error occurred for the request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_ERROR = 'NoError';

    /**
     * This error indicates that the caller tried to grant permissions in its
     * calendar or contacts folder to a user in another organization, and the
     * attempt failed.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NO_EXTERNAL_SHARING_ALLOWED_BY_POLICY = 'ErrorNotAllowedExternalSharingByPolicy';

    /**
     * This error occurs if you set the FolderClass property when you are
     * creating an item other than a generic folder.
     *
     * For typed folders such as CalendarFolderType and TasksFolderType, the
     * folder class is implied. Setting the folder class to a different folder
     * type by using the UpdateFolder Operation results in the
     * ErrorObjectTypeChanged response. Instead, use a generic folder type but
     * set the folder class to the value that you require. Exchange Web Services
     * will create the correct strongly typed folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_FOLDER_CLASS_OVERRIDE = 'ErrorNoFolderClassOverride';

    /**
     * This error indicates that the caller does not have free/busy viewing
     * rights on the Calendar folder in question.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_FREE_BUSY_ACCESS = 'ErrorNoFreeBusyAccess';

    /**
     * This error indicates that MAPI properties in the custom range, 0x8000 and
     * greater, cannot be referenced by property tags.
     *
     * You must use the PropertySetId property or the DistinguishedPropertySetId
     * property together with the PropertyName or PropertyId properties.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_PROPERTY_TAG_FOR_CUSTOM_PROPERTIES = 'ErrorNoPropertyTagForCustomProperties';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_PUBLIC_FOLDER_REPLICA_AVAILABLE = 'ErrorNoPublicFolderReplicaAvailable';

    /**
     * This error code MUST be returned if no public folder server is available
     * or if the caller does not have a home public server.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NO_PUBLIC_FOLDER_SERVER_AVAILABLE = 'ErrorNoPublicFolderServerAvailable';

    /**
     * This error indicates that the request referred to a mailbox in another
     * Active Directory site, but none of the Client Access servers in that site
     * responded, and therefore the request could not be proxied.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_RESPONDING_CAS_IN_DESTINATION_SITE = 'ErrorNoRespondingCASInDestinationSite';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const NO_SPEECH_DETECTED = 'ErrorNoSpeechDetected';

    /**
     * This error occurs when a mailbox could not be found for an email address.
     *
     * This error occurs in the following scenarios:
     * - The e-mail address is empty in CreateManagedFolder.
     * - The e-mail address does not refer to a valid account in a request that
     * takes an e-mail address in the body or in the SOAP header, such as in an
     * Exchange Impersonation call.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NON_EXISTENT_MAILBOX = 'ErrorNonExistentMailbox';

    /**
     * This error occurs when a caller passes in a non-primary SMTP address. The
     * response includes the correct SMTP address to use.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NON_PRIMARY_SMTP_ADDRESS = 'ErrorNonPrimarySmtpAddress';

    /**
     * This error is returned whenever an ID that is not an item attachment ID
     * is passed to a Web service method that expects an attachment ID.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOT_AN_ITEM_ATTACHMENT_ID = 'ErrorInvalidIdNotAnItemAttachmentId';

    /**
     * This error indicates that the user is not a delegate for the mailbox.
     *
     * It is returned by the GetDelegate Operation, the RemoveDelegate
     * Operation, and the UpdateDelegate Operation when the specified delegate
     * user is not found in the list of delegates.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const NOT_DELEGATE = 'ErrorNotDelegate';

    /**
     * This error indicates that the operation could not be completed because of
     * insufficient memory.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOT_ENOUGH_MEMORY = 'ErrorNotEnoughMemory';

    /**
     * This error indicates that the operation (currently CancelItem) on the
     * calendar item is not valid for an attendee; only the meeting organizer
     * can cancel the meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOT_ORGANIZER = 'ErrorCalendarIsNotOrganizer';

    /**
     * This error occurs if the object type changed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OBJECT_TYPE_CHANGED = 'ErrorObjectTypeChanged';

    /**
     * This error occurs when the Start or End time of an occurrence is updated
     * so that the occurrence is scheduled to happen earlier or later than the
     * corresponding previous or next occurrence.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OCCURRENCE_CROSSING_BOUNDARY = 'ErrorOccurrenceCrossingBoundary';

    /**
     * This error indicates that the occurrence index does not point to an
     * occurrence within the current recurrence.
     *
     * For example, if your recurrence pattern defines a set of three meeting
     * occurrences and you try to access the fifth occurrence, this response
     * code will result.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OCCURRENCE_INDEX_OUT_OF_RANGE = 'ErrorCalendarOccurrenceIndexIsOutOfRecurrenceRange';

    /**
     * This error indicates that any operation on a deleted occurrence
     * (addressed via recurring master ID and occurrence index) is invalid.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OCCURRENCE_IS_DELETED = 'ErrorCalendarOccurrenceIsDeletedFromRecurrence';

    /**
     * This error indicates that the time allotment for a given occurrence
     * overlaps with another occurrence of the same recurring item.
     *
     * This response also occurs when the length in minutes of a given
     * occurrence is larger than Int32.MaxValue.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OCCURRENCE_TIME_SPAN_TOO_BIG = 'ErrorOccurrenceTimeSpanTooBig';

    /**
     * This error indicates that the current operation is not valid for the
     * public folder root.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OPERATION_NOT_ALLOWED_WITH_PUBLIC_FOLDER_ROOT = 'ErrorOperationNotAllowedWithPublicFolderRoot';

    /**
     * This error indicates that the requester's organization is not federated
     * so the requester cannot create sharing messages to send to an external
     * user or cannot accept sharing messages received from an external user.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ORGANIZATION_NOT_FEDERATED = 'ErrorOrganizationNotFederated';

    /**
     * This error indicates that AcceptItem is invalid for the organizer’s
     * calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ORGANIZER_FOR_ACCEPT = 'ErrorCalendarIsOrganizerForAccept';

    /**
     * This error indicates that DeclineItem is invalid for the organizer’s
     * calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ORGANIZER_FOR_DECLINE = 'ErrorCalendarIsOrganizerForDecline';

    /**
     * This error indicates that RemoveItem is invalid for the organizer’s
     * calendar item. To remove a meeting from the calendar, the organizer must
     * use CancelItem.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ORGANIZER_FOR_REMOVE = 'ErrorCalendarIsOrganizerForRemove';

    /**
     * This error indicates that TentativelyAcceptItem is invalid for the
     * organizer’s calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ORGANIZER_FOR_TENTATIVE = 'ErrorCalendarIsOrganizerForTentative';

    /**
     * This error MUST be returned when an attempt to manage Inbox rules occurs
     * after another client has accessed the Inbox rules.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const OUTLOOK_RULE_BLOB_EXISTS = 'ErrorOutlookRuleBlobExists';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PARENT_FOLDER_ID_REQUIRED = 'ErrorParentFolderIdRequired';

    /**
     * This error occurs in the CreateFolder Operation when the parent folder is
     * not found.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PARENT_FOLDER_NOT_FOUND = 'ErrorParentFolderNotFound';

    /**
     * This error indicates that you must change your password before you can
     * access this mailbox.
     *
     * This occurs when a new account has been created and the administrator
     * indicated that the user must change the password at first logon. You
     * cannot update the password by using Exchange Web Services. You must use a
     * tool such as Microsoft Office Outlook Web App to change your password.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PASSWORD_CHANGE_REQUIRED = 'ErrorPasswordChangeRequired';

    /**
     * This error indicates that the password has expired.
     *
     * You cannot change the password by using Exchange Web Services. You must
     * use a tool such as Outlook Web App to change your password.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PASSWORD_EXPIRED = 'ErrorPasswordExpired';

    /**
     * This error indicates that the requester tried to grant permissions in its
     * calendar or contacts folder to an external user but the sharing policy
     * assigned to the requester indicates that the requested permission level
     * is higher than what the sharing policy allows.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PERMISSION_NOT_ALLOWED_BY_POLICY = 'ErrorPermissionNotAllowedByPolicy';

    /**
     * This error Indicates that the telephone number was not in the correct
     * form.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PHONE_NUMBER_NOT_DIALABLE = 'ErrorPhoneNumberNotDialable';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PROMPT_PUBLISHING_OPERATION_FAILED = 'ErrorPromptPublishingOperationFailed';

    /**
     * This error indicates that the update failed because of invalid property
     * values.
     *
     * The response message includes the invalid property paths.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROPERTY_UPDATE_ERROR = 'ErrorPropertyUpdate';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROPERTY_VALIDATION_FAILURE = 'ErrorPropertyValidationFailure';

    /**
     * This error indicates that the request referred to a subscription that
     * exists on another Client Access server, but an attempt to proxy the
     * request to that Client Access server failed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROXIED_SUBSCRIPTION_CALL_FAILURE = 'ErrorProxiedSubscriptionCallFailure';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROXY_CALL_FAILED = 'ErrorProxyCallFailed';

    /**
     * This error indicates that the request referred to a mailbox in another
     * Active Directory site, and the original caller is a member of more than
     * 3,000 groups.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROXY_GROUP_SID_LIMIT_EXCEEDED = 'ErrorProxyGroupSidLimitExceeded';

    /**
     * This error indicates that the request that Exchange Web Services sent to
     * another Client Access server when trying to fulfill a GetUserAvailability
     * request was invalid.
     *
     * This response code typically indicates that a configuration or rights
     * error has occurred, or that someone tried unsuccessfully to mimic an
     * availability proxy request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROXY_REQUEST_NOT_ALLOWED = 'ErrorProxyRequestNotAllowed';

    /**
     * This error indicates that Exchange Web Services tried to proxy an
     * availability request to another Client Access server for fulfillment, but
     * the request failed.
     *
     * This response can be caused by network connectivity issues or request
     * timeout issues.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROXY_REQUEST_PROCESSING_FAILED = 'ErrorProxyRequestProcessingFailed';

    /**
     * This error code must be returned if the Web service cannot determine
     * whether the request is to run on the target server or will be proxied to
     * another server.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const PROXY_SERVICE_DISCOVERY_FAILED = 'ErrorProxyServiceDiscoveryFailed';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PROXY_TOKEN_EXPIRED = 'ErrorProxyTokenExpired';

    /**
     * This error occurs when the public folder mailbox URL cannot be found.
     *
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PUBLIC_FOLDER_MAILBOX_DISCOVERY_FAILED = 'ErrorPublicFolderMailboxDiscoveryFailed';

    /**
     * This error occurs when an attempt is made to access a public folder and
     * the attempt is unsuccessful.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PUBLIC_FOLDER_OPERATION_FAILED = 'ErrorPublicFolderOperationFailed';

    /**
     * This error occurs when the recipient that was passed to the
     * GetUserAvailability Operation is located on a computer that is running a
     * version of Exchange Server that is earlier than Exchange 2007, and the
     * request to retrieve free/busy information for the recipient from the
     * public folder server failed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PUBLIC_FOLDER_REQUEST_PROCESSING_FAILED = 'ErrorPublicFolderRequestProcessingFailed';

    /**
     * This error occurs when the recipient that was passed to the
     * GetUserAvailability Operation is located on a computer that is running a
     * version of Exchange Server that is earlier than Exchange 2007, and the
     * request to retrieve free/busy information for the recipient from the
     * public folder server failed because the organizational unit did not have
     * an associated public folder server.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PUBLIC_FOLDER_SERVER_NOT_FOUND = 'ErrorPublicFolderServerNotFound';

    /**
     * This error occurs when a synchronization operation succeeds against the
     * primary public folder mailbox but does not succeed against the secondary
     * public folder mailbox.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const PUBLIC_FOLDER_SYNC_EXCEPTION = 'ErrorPublicFolderSyncException';

    /**
     * This error indicates that the search folder restriction may be valid, but
     * it is not supported by EWS.
     *
     * Exchange Web Services limits restrictions to contain a maximum of 255
     * filter expressions. If you try to bind to an existing search folder that
     * exceeds 255, this response code is returned.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const QUERY_FILTER_TOO_LONG = 'ErrorQueryFilterTooLong';

    /**
     * This error occurs when the mailbox quota is exceeded.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const QUOTA_EXCEEDED = 'ErrorQuotaExceeded';

    /**
     * This error is returned by the GetEvents Operation or push notifications
     * when a failure occurs while retrieving event information.
     *
     * When this error is returned, the subscription is deleted. Re-create the
     * event synchronization based on a last known watermark.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const READ_EVENTS_FAILED = 'ErrorReadEventsFailed';

    /**
     * This error is returned by the CreateItem Operation if an attempt was made
     * to suppress a read receipt when the message sender did not request a read
     * receipt on the message or if the message is in the Junk E-mail folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const READ_RECEIPT_NOT_PENDING = 'ErrorReadReceiptNotPending';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const RECIPIENT_NOT_FOUND = 'ErrorRecipientNotFound';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const RECOGNIZER_NOT_INSTALLED = 'ErrorRecognizerNotInstalled';

    /**
     * This error occurs when the end date for the recurrence is after 9/1/4500.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_END_DATE_TOO_BIG = 'ErrorRecurrenceEndDateTooBig';

    /**
     * This error occurs when the specified recurrence does not have any
     * occurrence instances in the specified range.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RECURRENCE_HAS_NO_OCCURRENCE = 'ErrorRecurrenceHasNoOccurrence';

    /**
     * This error indicates that the delegate list failed to be saved after
     * delegates were removed.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const REMOVE_DELEGATES_FAILED = 'ErrorRemoveDelegatesFailed';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const REQUEST_ABORTED = 'ErrorRequestAborted';

    /**
     * This error occurs when the request stream is larger than 400 KB.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const REQUEST_STREAM_TOO_BIG = 'ErrorRequestStreamTooBig';

    /**
     * This error is returned when a required property is missing in a
     * CreateAttachment Operation request.
     *
     * The missing property URI is included in the response.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const REQUIRED_PROPERTY_MISSING = 'ErrorRequiredPropertyMissing';

    /**
     * This error indicates that the caller has specified a folder that is not a
     * contacts folder to the ResolveNames Operation.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESOLVE_NAMES_INVALID_FOLDER_TYPE = 'ErrorResolveNamesInvalidFolderType';

    /**
     * This error indicates that the caller has specified more than one contacts
     * folder to the ResolveNames Operation.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESOLVE_NAMES_ONLY_ONE_CONTACTS_FOLDER_ALLOWED = 'ErrorResolveNamesOnlyOneContactsFolderAllowed';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESPONSE_SCHEMA_VALIDATION = 'ErrorResponseSchemaValidation';

    /**
     * This error occurs when the restriction cannot be evaluated by Exchange
     * Web Services.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESTRICTION_TOO_COMPLEX = 'ErrorRestrictionTooComplex';

    /**
     * This error occurs if the restriction contains more than 255 nodes.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESTRICTION_TOO_LONG = 'ErrorRestrictionTooLong';

    /**
     * This error indicates that the number of calendar entries for a given
     * recipient exceeds the allowed limit of 1000.
     *
     * Reduce the window and try again.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESULT_SET_TOO_BIG = 'ErrorResultSetTooBig';

    /**
     * This error MUST be returned when a user's rule quota has been exceeded.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const RULES_OVER_QUOTA = 'ErrorRulesOverQuota';

    /**
     * This error occurs when the SavedItemFolderId is not found.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SAVED_ITEM_FOLDER_NOT_FOUND = 'ErrorSavedItemFolderNotFound';

    /**
     * This error occurs when the request cannot be validated against the
     * schema.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SCHEMA_VALIDATION = 'ErrorSchemaValidation';

    /**
     * This error indicates that the search folder was created, but the search
     * criteria were never set on the folder.
     *
     * This only occurs when you access corrupted search folders that were
     * created by using another API or client. To fix this error, use the
     * UpdateFolder Operation to set the SearchParameters to include the
     * restriction that should be on the folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEARCH_FOLDER_NOT_INITIALIZED = 'ErrorSearchFolderNotInitialized';

    /**
     * This error is returned when an unexpected photo size is requested in a
     * GetUserPhoto operation request.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SEARCH_QUERY_HAS_TOO_MANY_KEYWORDS = 'ErrorSearchQueryHasTooManyKeywords';

    /**
     * This error is returned when a SearchMailboxes operation request contains
     * too many mailboxes to search.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SEARCH_TOO_MANY_MAILBOXES = 'ErrorSearchTooManyMailboxes';

    /**
     * This error occurs when a an attempt to send a message as another user is
     * denied.
     *
     * The request will be denied when both of the following conditions occur:
     * - A user has been granted CanActAsOwner permissions but is not granted
     *   delegate rights on the principal’s mailbox.
     * - The same user tries to create and send an e-mail message in the
     *   principal’s mailbox by using the SendAndSaveCopy option.
     *
     * The result is an ErrorSendAsDenied error and the creation of the e-mail
     * message in the principal’s Drafts folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_AS_DENIED = 'ErrorSendAsDenied';

    /**
     * This error is returned by the DeleteItem Operation if the
     * SendMeetingCancellations attribute is missing from the request and the
     * item to delete is a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_MEETING_CANCELLATIONS_REQUIRED = 'ErrorSendMeetingCancellationsRequired';

    /**
     * This error is returned by the UpdateItem Operation if the
     * SendMeetingInvitationsOrCancellations attribute is missing from the
     * request and the item to update is a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_MEETING_INVITATIONS_OR_CANCELLATIONS_REQUIRED = 'ErrorSendMeetingInvitationsOrCancellationsRequired';

    /**
     * This error is returned by the CreateItem Operation if the
     * SendMeetingInvitations attribute is missing from the request and the item
     * to create is a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SEND_MEETING_INVITATIONS_REQUIRED = 'ErrorSendMeetingInvitationsRequired';

    /**
     * This error indicates that after the organizer sends a meeting request,
     * the request cannot be updated.
     *
     * To modify the meeting, modify the calendar item, not the meeting request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SENT_MEETING_REQUEST_UPDATE = 'ErrorSentMeetingRequestUpdate';

    /**
     * This error indicates that after the task initiator sends a task request,
     * that request cannot be updated.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SENT_TASK_REQUEST_UPDATE = 'ErrorSentTaskRequestUpdate';

    /**
     * This error occurs when the server is busy.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SERVER_BUSY = 'ErrorServerBusy';

    /**
     * This error indicates that Exchange Web Services tried to proxy a user
     * availability request to the appropriate forest for the recipient, but it
     * could not determine where to send the request because of a service
     * discovery failure.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SERVICE_DISCOVERY_FAILED = 'ErrorServiceDiscoveryFailed';

    /**
     *  This error indicates that the sharing message is not supported.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SHARING_MESSAGE_NOT_SUPPORTED = 'ErrorNotSupportedSharingMessage';

    /**
     * This error indicates that the external URL property has not been set in
     * the Active Directory database.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SHARING_NO_EXTERNAL_EWS_AVAILABLE = 'ErrorSharingNoExternalEwsAvailable';

    /**
     * This error indicates that an attempt at synchronizing a sharing folder
     * failed.
     *
     * This error code is returned when one of the following occurs:
     * - The subscription for a sharing folder is not found.
     * - The sharing folder is not found
     * - The corresponding directory user is not found
     * - The user no longer exists.
     * - The appointment is invalid
     * - The contact item is invalid.
     * - There is a communication failure with the remote server.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SHARING_SYNCHRONIZATION_FAILED = 'ErrorSharingSynchronizationFailed';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SPEECH_GRAMMAR_ERROR = 'ErrorSpeechGrammarError';

    /**
     * This error occurs in an UpdateItem Operation or a SendItem Operation when
     * the change key is not up-to-date or was not supplied.
     *
     * Call the GetItem Operation to retrieve an updated change key and then try
     * the operation again.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const STALE_OBJECT = 'ErrorStaleObject';

    /**
     * This error occurs when the caller specifies an Id attribute that is too
     * long.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const STORE_OBJECT_ID_TOO_LONG = 'ErrorInvalidIdStoreObjectIdTooLong';

    /**
     * This error Indicates that a user cannot immediately send more requests
     * because the submission quota has been reached.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SUBMISSION_QUOTE_EXCEEDED = 'ErrorSubmissionQuotaExceeded';

    /**
     * This error occurs when you try to access a subscription by using an
     * account that did not create that subscription.
     *
     * Each subscription can only be accessed by the creator of the
     * subscription.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SUBSCRIPTION_ACCESS_DENIED = 'ErrorSubscriptionAccessDenied';

    /**
     * This error indicates that you cannot create a subscription if you are not
     * the owner or do not have owner access to the mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const SUBSCRIPTION_DELEGATE_ACCESS_NOT_SUPPORTED = 'ErrorSubscriptionDelegateAccessNotSupported';

    /**
     * This error occurs if the subscription that corresponds to the specified
     * SubscriptionId is not found.
     *
     * The subscription may have expired, the Exchange Web Services process may
     * have been restarted, or an invalid subscription was passed in. If the
     * subscription was valid, re-create the subscription with the latest
     * watermark. This is returned by the Unsubscribe Operation or the GetEvents
     * Operation responses.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SUBSCRIPTION_NOT_FOUND = 'ErrorSubscriptionNotFound';

    /**
     * This error code must be returned when a request is made for a
     * subscription that has been unsubscribed.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SUBSCRIPTION_UNSUBSCRIBED = 'ErrorSubscriptionUnsubsribed';

    /**
     * This error is returned by the SyncFolderItems Operation if the parent
     * folder that is specified cannot be found.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SYNC_FOLDER_NOT_FOUND = 'ErrorSyncFolderNotFound';

    /**
     * This error code is not used.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TEAM_MAILBOX_ACTIVE_TO_PENDING_DELETE = 'ErrorTeamMailboxActiveToPendingDelete';

    /**
     * This error indicates a general error that can occur when trying to access
     * a team mailbox.
     *
     * Try submitting the request at a later time.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TEAM_MAILBOX_ERROR_UNKNOWN = 'ErrorTeamMailboxErrorUnknown';

    /**
     * This error indicates that an attempt to send a notification to the team
     * mailbox owners was unsuccessful.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TEAM_MAILBOX_FAILED_SENDING_NOTIFICATIONS = 'ErrorTeamMailboxFailedSendingNotifications';

    /**
     * This error code is not used.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TEAM_MAILBOX_NOT_AUTHORIZED_OWNER = 'ErrorTeamMailboxNotAuthorizedOwner';

    /**
     * This error indicates that a team mailbox was not found.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TEAM_MAILBOX_NOT_FOUND = 'ErrorTeamMailboxNotFound';

    /**
     * This error indicates that a team mailbox was found but that it is not
     * linked to a SharePoint Server.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TEAM_MAILBOX_NOT_LINKED_TO_SHARE_POINT = 'ErrorTeamMailboxNotLinkedToSharePoint';

    /**
     * This error indicates that a team mailbox was found but that the link to
     * the SharePoint Server is not valid.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TEAM_MAILBOX_URL_VALIDATION_FAILED = 'ErrorTeamMailboxUrlValidationFailed';

    /**
     * This error indicates that the time window that was specified is larger
     * than the allowed limit.
     *
     * By default, the allowed limit is 42.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TIME_INTERVAL_TOO_BIG = 'ErrorTimeIntervalTooBig';

    /**
     * This error indicates that there is a time zone error.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TIME_ZONE_ERROR = 'ErrorTimeZone';

    /**
     * This error occurs when there is not enough time to complete the
     * processing of the request.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TIMEOUT_EXPIRED = 'ErrorTimeoutExpired';

    /**
     * This error indicates that the destination folder does not exist.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TO_FOLDER_NOT_FOUND = 'ErrorToFolderNotFound';

    /**
     * This error occurs if the caller tries to do a Token serialization request
     * but does not have the ms-Exch-EPI-TokenSerialization right on the Client
     * Access server.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TOKEN_SERIALIZATION_DENIED = 'ErrorTokenSerializationDenied';

    /**
     * This error is returned when the attachment hierarchy on an item exceeds
     * the maximum of 255 levels deep.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TOO_MANY_ATTACHMENT_LEVELS = 'ErrorInvalidIdTooManyAttachmentLevels';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const UM_SERVER_UNAVAILABLE = 'ErrorUMServerUnavailable';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNABLE_TO_GET_USER_OOF_SETTINGS = 'ErrorUnableToGetUserOofSettings';

    /**
     * This error occurs when an unsuccessful attempt is made to remove an IM
     * contact from a group.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const UNABLE_TO_REMOVE_IM_CONTACT_FROM_GROUP = 'ErrorUnableToRemoveImContactFromGroup';

    /**
     * This error indicates that a user's dial plan is not available.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNIFIED_MESSAGING_DIAL_PLAN_NOT_FOUND = 'ErrorUnifiedMessagingDialPlanNotFound';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const UNIFIED_MESSAGING_PROMPT_NOT_FOUND = 'ErrorUnifiedMessagingPromptNotFound';

    /**
     * This error is intended for internal use only.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const UNIFIED_MESSAGING_REPORT_DATA_NOT_FOUND = 'ErrorUnifiedMessagingReportDataNotFound';

    /**
     * This error indicates that the user could not be found.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNIFIED_MESSAGING_REQUEST_FAILED = 'ErrorUnifiedMessagingRequestFailed';

    /**
     * This error indicates that a valid server for the dial plan could not be
     * found to handle the request.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const UNIFIED_MESSAGING_SERVER_NOT_FOUND = 'ErrorUnifiedMessagingServerNotFound';

    /**
     * This error occurs when you try to set the Culture property to a value
     * that is not parsable by the System.Globalization.CultureInfo class.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_CULTURE = 'ErrorUnsupportedCulture';

    /**
     * This error occurs when a caller tries to use extended properties of types
     * object, object array, error, or null.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_MAPI_PROPERTY_TYPE = 'ErrorUnsupportedMapiPropertyType';

    /**
     * This error occurs when you are trying to retrieve or set MIME content for
     * an item other than a PostItemType, MessageType, or CalendarItemType
     * object.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_MIME_CONVERSION = 'ErrorUnsupportedMimeConversion';

    /**
     * This error occurs when the caller passes a property that is invalid for a
     * query.
     *
     * This can occur when calculated properties are used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_PATH_FOR_QUERY = 'ErrorUnsupportedPathForQuery';

    /**
     * This error occurs when the caller passes a property that is invalid for a
     * sort or group by property.
     *
     * This can occur when calculated properties are used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_PATH_FOR_SORT_GROUP = 'ErrorUnsupportedPathForSortGroup';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_PROPERTY_DEFINITION = 'ErrorUnsupportedPropertyDefinition';

    /**
     * This error indicates that the search folder restriction may be valid, but
     * it is not supported by EWS.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_QUERY_FILTER = 'ErrorUnsupportedQueryFilter';

    /**
     * This error indicates that the specified recurrence is not supported for
     * tasks.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_RECURRENCE = 'ErrorUnsupportedRecurrence';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_SUBFILTER = 'ErrorUnsupportedSubFilter';

    /**
     * This error indicates that Exchange Web Services found a property type in
     * the store but it cannot generate XML for the property type.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UNSUPPORTED_TYPE_FOR_CONVERSION = 'ErrorUnsupportedTypeForConversion';

    /**
     * This error indicates that the delegate list failed to be saved after
     * delegates were updated.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const UPDATE_DELEGATES_FAILED = 'ErrorUpdateDelegatesFailed';

    /**
     * This error occurs when the single property path that is listed in a
     * change description does not match the single property that is being set
     * within the actual ItemType or FolderType object.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const UPDATE_PROPERTY_MISMATCH = 'ErrorUpdatePropertyMismatch';

    /**
     * This error indicates that the requester tried to grant permissions in its
     * calendar or contacts folder to an external user but the sharing policy
     * assigned to the requester indicates that the domain of the external user
     * is not listed in the policy.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const USER_NOT_ALLOWED_BY_POLICY = 'ErrorUserNotAllowedByPolicy';

    /**
     * This error indicates that the requester is not enabled.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const USER_NOT_UNIFIED_MESSAGING_ENABLED = 'ErrorUserNotUnifiedMessagingEnabled';

    /**
     * Indicates that the requester's organization has a set of federated
     * domains but the requester's organization does not have any SMTP proxy
     * addresses with one of the federated domains.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const USER_WITHOUT_FEDERATED_PROXY_ADDRESS = 'ErrorUserWithoutFederatedProxyAddress';

    /**
     * This error indicates that a calendar view start date or end date was set
     * to 1/1/0001 12:00:00 AM or 12/31/9999 11:59:59 PM.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const VALUE_OUT_OF_RANGE = 'ErrorValueOutOfRange';

    /**
     * This error occurs when Start to End range for the CalendarView element is
     * more than the maximum allowed, currently 2 years.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const VIEW_RANGE_TOO_BIG = 'ErrorCalendarViewRangeTooBig';

    /**
     * This error indicates that the Exchange store detected a virus in the
     * message.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const VIRUS_DETECTED = 'ErrorVirusDetected';

    /**
     * This error indicates that the Exchange store detected a virus in the
     * message and deleted it.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const VIRUS_MESSAGE_DELETED = 'ErrorVirusMessageDeleted';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const VOICE_MAIL_NOT_IMPLEMENTED = 'ErrorVoiceMailNotImplemented';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WEB_REQUEST_IN_INVALID_STATE = 'ErrorWebRequestInInvalidState';

    /**
     * This error indicates that there was an internal failure during
     * communication with unmanaged code.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WIN32_INTEROP_ERROR = 'ErrorWin32InteropError';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WORKING_HOURS_SAVE_FAILED = 'ErrorWorkingHoursSaveFailed';

    /**
     * This response code is not used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WORKING_HOURS_XML_MALFORMED = 'ErrorWorkingHoursXmlMalformed';

    /**
     * This error indicates that a request can only be made to a server that is
     * the same version as the mailbox server.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const WRONG_SERVER_VERSION = 'ErrorWrongServerVersion';

    /**
     * This error indicates that a request was made by a delegate that has a
     * different server version than the principal's mailbox server.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const WRONG_SERVER_VERSION_DELEGATE = 'ErrorWrongServerVersionDelegate';
}
