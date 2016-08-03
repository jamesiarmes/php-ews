---
title:  "Calendar and Contact: Delete"
date:   2012-09-07
updated: 2012-10-31
category: "0.1"
tags: calendar, contact
---
This example shows how to delete any item with Id and ChangeKey parameters.

```php?start_inline=1
// Define EWS
$ews = new ExchangeWebServices($host, $username, $password, $version);

// Define Id and ChangeKey 
$event_id = '<existing contact id>';
$event_change_key = '<existing contact change key>';

// Define the delete item class
$request = new EWSType_DeleteItemType();
// Send to trash can, or use EWSType_DisposalType::HARD_DELETE instead to bypass the bin directly
$request->DeleteType = EWSType_DisposalType::MOVE_TO_DELETED_ITEMS;
// Inform no one who shares the item that it has been deleted
$request->SendMeetingCancellations = EWSType_CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;

// Set the item to be deleted
$item = new EWSType_ItemIdType();
$item->Id = $event_id;
$item->ChangeKey = $event_change_key;

// We can use this to mass delete but in this case it's just one item
$items = new EWSType_NonEmptyArrayOfBaseItemIdsType();
$items->ItemId = $item;
$request->ItemIds = $items;

// Send the request
$response = $ews->DeleteItem($request);
var_dump($response);
```
