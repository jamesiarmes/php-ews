# Changelog

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
