# Changelog

## 0.3.2 - 2015-07-*
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