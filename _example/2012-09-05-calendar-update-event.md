---
title:  "Calendar: Update Event"
date:   2012-09-05
updated: 2016-01-23
category: 0.1
tags: calendar
---
This example shows how to update an existing event.

```php?start_inline=1
// Define the event to be updated.
$event_id = '<existing event id>';
$event_change_key = '<existing event change key>';

$ews = new ExchangeWebServices($host, $username, $password, $version);

$request = new EWSType_UpdateItemType();
$request->ConflictResolution = 'AlwaysOverwrite';
$request->SendMeetingInvitationsOrCancellations = 'SendOnlyToAll';
$request->ItemChanges = array();

$change = new EWSType_ItemChangeType();
$change->ItemId = new EWSType_ItemIdType();
$change->ItemId->Id = $event_id;
$change->ItemId->ChangeKey = $event_change_key;

//Update Subject Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'item:Subject';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->Subject = 'New Subject';
$change->Updates->SetItemField[] = $field;

//Update Start Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'calendar:Start';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->Start = '2013-09-12T05:00:00+00:00';
$change->Updates->SetItemField[] = $field;

// Update End Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'calendar:End';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->End = '2013-09-13T05:00:00+00:00';
$change->Updates->SetItemField[] = $field;

// Update Body Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'item:Body';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->Body = new EWSType_BodyType();
$field->CalendarItem->Body->BodyType = EWSType_BodyTypeType::TEXT;
$field->CalendarItem->Body->_ = 'Body Text Goes Here';
$change->Updates->SetItemField[] = $field;

// Update ReminderIsSet Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'item:ReminderIsSet';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->ReminderIsSet = true;
$change->Updates->SetItemField[] = $field;

// Update ReminderMinutesBeforeStart Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'item:ReminderMinutesBeforeStart';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->ReminderMinutesBeforeStart = 10;
$change->Updates->SetItemField[] = $field;

// Update LegacyFreeBusyStatus Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'calendar:LegacyFreeBusyStatus';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->LegacyFreeBusyStatus = 'Busy';
$change->Updates->SetItemField[] = $field;

// Update Location Property
$field = new EWSType_SetItemFieldType();
$field->FieldURI = new EWSType_PathToUnindexedFieldType();
$field->FieldURI->FieldURI = 'calendar:Location';
$field->CalendarItem = new EWSType_CalendarItemType();
$field->CalendarItem->Location = 'Conference Room';
$change->Updates->SetItemField[] = $field;

$request->ItemChanges[] = $change;

$response = $ews->UpdateItem($request);
var_dump($response);
```
