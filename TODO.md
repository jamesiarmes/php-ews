# To Do List

### EWSAutoDiscover
 * Fix this shit up some day
 * Unit test what's fixed

### HttpPlayback
 * Probably move to it's own library

### All Types
 * Add a dirty/clean state to objects, so you can do `$api->updateItem($items)` and have it know what to update

### Test Coverage
 * Increase to at least 90%

### Compatibility
 * Think about swapping out Guzzle to reduce PHP version requirement to 5.4

### Code Generation
 * Modify generator to include the SOAP functions as Doc Blocks on ExchangeWebServices class

### Features
 * Create interfaces for at least the API classes
 * Merge `getFileAttachments()` and `getItemAttachments()` to `getAllAttachments()` in `NonEmptyArrayOfAttachmentsType`
 * Implement `ItemType::getAttachments($attachmentType = null)` to allow selection of certain types of attachments
 * When you fetch a list of items, certain information is discarded in the drilling down like the offset, if all items
 are in the view or if this requests contains the last item in the list. There's also no easy way to get a list starting
 at an offset. This should be fixed
 * Allow drillDownResponses to be optional. Or at least part of it. There should be a way to get richer responses if desired
 * Allow using this library with Office 365, which means that we need to support auth using a token instead of a username
 and password. It also means we need a way of fetching this token

### Incorrectly returned values
 * `ItemType::getCategories()` return a `stdClass` with a property `String` which holds the categories, rather than returning them directly

### Feature
 * Implement a "Always return as Array" feature (Will break BC)
