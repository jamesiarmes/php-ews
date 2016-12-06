# Changelog

## [Unreleased]

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

### Removed
- Custom exception class.
- Invalid schema versions.

## 0.1.1 - 2015-02-19

### Added
- Added CHANGELOG.txt.

### Changed
- Fixed EWSType_DistinguishedFolderIdNameType::JUNK value.
- Fixed missing quote in README.txt.

### 0.1.0 - 2014-12-18

Initial release supporting Exchange 2007 and 2010.
