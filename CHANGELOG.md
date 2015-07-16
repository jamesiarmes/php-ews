# Changelog

## 0.3.0 - 2015-07-*
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