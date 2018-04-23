# Changelog

## [Unreleased]

## 1.0.0 - 2017-10-03

First stable release.

### Changed
- Updated minimum required version of php-ntlm.

## 1.0.0-rc.2 - 2017-03-11

### Changed
- Fixed capitalization of URL property on PushSubscriptionRequestType.
- Fixed capitalization of redirect element in autodiscovery.
- Updated contact/update example to use a constant for the field URI.
- Added output for downloaded attachments in message/get-attachments example.

## 1.0.0-rc.1 - 2017-03-02

### Added
- ProposeNewTimeType implementation.

## 1.0.0-beta.4 - 2017-02-12

### Changed
- Autodiscovery failure now throws a RuntimeException.

## 1.0.0-beta.3 - 2017-01-21

### Added
- Example for a message with an inline attachment.

### Changed
- Fixed Exchange 2007 version parsing in autodiscovery.
- Fixed event title in event/create example.
- Improved error messages in examples.

## 1.0.0-beta.2 - 2017-01-12

### Added
- Autodiscover, user, event, message and timezone examples.

### Changed
- Set default value to array for some properties that were not set.

## 1.0.0-beta.1 - 2016-12-30

### Added
- Composer support.
- Appropriate base classes.
- Missing Exchange 2010 and 2013 operations.
- Class map so responses use the proper response objects rather than stdClass.
- Method to set cURL options for requests.
- Method to set the timezone for requests.

### Changed
- Renamed and namespaced all classes to be PSR-4 compatible.
- Updated various code documentation.
- Assets now match the latest for Exchange 2016/Exchange Online.
- Autodiscovery now supports Exchange 2013 and 2016.
- Properties on array types in responses should always be an array now.
- SOAP client and headers are only reinitialized/rebuilt when necessary.
- Default Microsoft Exchange version is now 2013.

### Removed
- Custom exception class.
- Invalid schema versions.

### Deprecated
- Instantiating enumeration classes, reference the constants instead.

## 0.1.1 - 2015-02-19

### Added
- Added CHANGELOG.txt.

### Changed
- Fixed EWSType_DistinguishedFolderIdNameType::JUNK value.
- Fixed missing quote in README.txt.

### 0.1.0 - 2014-12-18

Initial release supporting Exchange 2007 and 2010.
