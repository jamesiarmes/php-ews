# Changelog

## 0.7.5 - TBD
 * Removed `NTLMSoapClient\Exchange`. Folded the few lines of functionality in to `NTLMSoapClient`
 * Added `API::getServerTimezones($timezoneIDs = array(), $fullTimezoneData = false)`
 * Added `CalendarAPI::acceptMeeting($itemId, $message, $sensitivity = 'Private', $options = array()`
 * Added `ContactsAPI::createContacts($contact, $options=array())`
 * Added `ContactsAPI::updateContactItem($itemId, $changes)`
 * Added some contact examples

## 0.7.4 - 2016-03-02
 * Introduced the `API::deleteFolder($folderId)` method
 * Improved OAuth Documentation

## 0.7.3 - 2016-02-22
 * If a response doesn't have a 'ResponseMessages' Property (such as `GetUserAvailabilityResponseType`), then don't drill
 down response levels and instead simply return the response

## 0.7.2 - 2016-01-26
 * Added `ContactsAPI` for simple usage
 * Added examples for the ContactsAPI
 * Added `API::getChildrenFolders($parentFolderId, $options)`
 * Made `FindFolderParentType` and `ArrayOfFoldersType` iterable like the previous updates
 * Added a `CalendarAPI::setFolderId($folderId)` method

## 0.7.1 - 2015-12-07
 * `MailAPI::getMailItems()` now returns the `FindItemParentType`, which as of `0.7.0` is iterable.

## 0.7.0 - 2015-12-04
 * Implemented `ArrayAccess`, `AggregateIterator` and `Countable` on `ArrayOfRealItemsType`, `FindItemParentType` and
 `GroupedItemsType` to let you iterate over them directly. This should allow you to use responses more effectively and
 access other data that was previous lost (such as whether or not the responses returned were paginated). This is a breaking
 change because `getCalendarItems()` now returned a `FindItemParentType` object which, while you can use as an array,
 will return false on is_array()

## 0.6.7 - 2015-12-04
 * Adding an option to get the raw responses from requests instead of having them drilled down automatically

## 0.6.6 - 2015-12-04
 * getAttachment not returns the mimeContent of the attachment, which will allow for saving the file
 * Added `ItemAttachmentType::getItemAttachment()` which will return whichever item is not null
 * Field URI's for updating items are now case insensitive and will either return preference:name or item:name or throw
 and exception

## 0.6.5 - 2015-11-25
 * Fixed a bug in `CalendarAPI::createCalendarItems()` that caused options not to be overridden

## 0.6.4 - 2015-11-24
 * Added an `$options` parameter in `CalendarAPI::createCalendarItems($items, $options)` to allow you to override the
 default options
 * Allow you to create `ItemIdType` with only an `$itemId` and not a `$changeKey`

## 0.6.3 - 2015-11-20
 * Extracted the authentication part of the call in to a configuration option for future authentication
 * Added an `ExchangeWebServicesAuth` class for generating these options
 * Moved API and ExchangeWebServices constructors to static functions. `$api->buildClient()` will now be deprecated and
 removed in 0.7.0. Please use `$api = API::withUsernameAndPassword($server, $username, $password)` instead
 * Added support for Office 365 with tokens instead of usernames and passwords. This is an experimental feature

## 0.6.2 - 2015-11-19
 * Fixed a bug where Guzzle wasn't actually attempting NTLM Authentication. It does now

## 0.6.1 - 2015-11-18
 * Fixed file names for the recordings for the test. This should allow installation on windows machines again

## 0.6.0 - 2015-11-16
 * Added a `FolderIdType $folderId` option to `MailAPI::getMailItems()` and `MailAPI::getUnreadMailItems()`. Because this
 is a minor BC breaking change, it gets a new new minor version, since this is a pre-1.0 release.

## 0.5.11 - 2015-11-16
 * Added an `API::getMailbox(string $folderName = null)` function
 * Added a `MailAPI::setFolderId(FolderIdType $folderId)` function
 * Added a `MailAPI::pickMailboxFolder(string $displayName, string|FolderIdType $parentFolder)` function
 * With the above functions you can now get mail items from folders other than the inbox
 * Version 0.6.0+ will change the `getMailItems` signature to include a folder to pick from as well

## 0.5.10 - 2015-11-09
 * Fixing but in `MailAPI::markEmailAsRead()` and allowing you to set it as unread through the same function

## 0.5.9 - 2015-11-05
 * Adding ability to get the attachments of an eamil

## 0.5.8 - 2015-09-30
 * Fixed a test for Travis to pass

## 0.5.7 - 2015-09-28
 * Allows the parentFolder in getFolderByDisplayName to be a folderId or a string

## 0.5.6 - 2015-09-28
 * Added simple support for creating folders
 * Added simple support for moving items
 * Added simple support for restrictions when getting mail

## 0.5.5 - 2015-08-26
 * Fixed support for impersonation and access of other mailboxes by including the primarySmtpEmailAddress option, which
 will automatically be sent to the server when you request a folderId()

## 0.5.4 - 2015-08-25
 * Fixed result for updateCalendarItem

## 0.5.3 - 2015-08-25
 * Replaced all array_merge with array_replace_recursive

## 0.5.2 - 2015-08-24
 * Added a constructor for ItemIdType

## 0.5.1 - 2015-08-24
 * Added an example for sending mail

## 0.5.0 - 2015-08-24
 * Massive Breaking Change
 * Some basic mail fetching functions
 * Easy to use examples
 * Objects for everything. All Auto-Generated
 * Made impersonating users easier

## 0.4.1 - 2015-07-22
 * Updating Type::buildFromArray

## 0.4.0 - 2015-07-22
 * Added Body to typemap
 * Added automatic getters and setters (`$calenderItem->getSubject()` for CalendarItem example)
 * Added automatic casting for Start and End in CalendarItem (`$calendarItem->setStart(new \DateTime())` will work)

## 0.3.2 - 2015-07-21
 * Made HttpPlayback to be instanced instead of static (Can make it write to more than one file)
 * Added Automatic getters and setters for items (Can do $item->getItemId() for example)
 * Added CalendarItem to the classmap for SoapClient (Getting CalendarItems will return that class now)
 * Added a TODO file

## 0.3.1 - 2015-07-16
 * Fixed bug where setting recordLocation sets to mode

## 0.3.0 - 2015-07-16
 * Added Changelog
 * Added `deleteItems($items, $options = array())` and `deleteCalendarItem($itemId, $changeKey)`
 * Added `deleteAllCalendarItems($from = '12:00 AM', $to = '11:59 PM');`
 * Added support for DateTime to be passed in to `getCalendarItems` and `deleteAllCalendarItems`
 * Added support for Timezones to be passed in
 * Added HttpPlayback abilities
 * Improved some unit tests
 * Improved outputs to remove levels of traversal

## 0.2.0 - 2015-07-04
 * Initial Release of the PSR-4 version of php-ews
