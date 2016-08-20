---
title:  "Calendar: Create Event"
date:   2012-06-12
updated: 2012-10-11
category: "0.1"
tags: calendar
---
Example of creating a basic event.

```php?start_inline=1
$ews = new ExchangeWebServices($host, $username, $password, $version);

// Start building the request.
$request = new EWSType_CreateItemType();
$request->Items = new EWSType_NonEmptyArrayOfAllItemsType();
$request->Items->CalendarItem = new EWSType_CalendarItemType();

// Set the subject.
$request->Items->CalendarItem->Subject = 'Basic Calendar Item Insertion';

// Set the start and end times. For Exchange 2007, you need to include the timezone offset.
// For Exchange 2010, you should set the StartTimeZone and EndTimeZone properties. See below for
// an example.
$date = new DateTime('8:00 AM');
$request->Items->CalendarItem->Start = $date->format('c');
$date->modify('+1 hour');
$request->Items->CalendarItem->End = $date->format('c');

// Set no reminders
$request->Items->CalendarItem->ReminderIsSet = false;

// Or use this to specify when reminder is displayed (if this is not set, the default is 15 minutes)
$request->Items->CalendarItem->ReminderMinutesBeforeStart = 15;

// Build the body.
$request->Items->CalendarItem->Body = new EWSType_BodyType();
$request->Items->CalendarItem->Body->BodyType = EWSType_BodyTypeType::HTML;
$request->Items->CalendarItem->Body->_ = 'This is <b>the</b> body';

// Set the item class type (not required).
$request->Items->CalendarItem->ItemClass = new EWSType_ItemClassType();
$request->Items->CalendarItem->ItemClass->_ = EWSType_ItemClassType::APPOINTMENT;

// Set the sensativity of the event (defaults to normal).
$request->Items->CalendarItem->Sensitivity = new EWSType_SensitivityChoicesType();
$request->Items->CalendarItem->Sensitivity->_ = EWSType_SensitivityChoicesType::NORMAL;

// Add some categories to the event.
$request->Items->CalendarItem->Categories = new EWSType_ArrayOfStringsType();
$request->Items->CalendarItem->Categories->String = array('Testing', 'php-ews');

// Set the importance of the event.
$request->Items->CalendarItem->Importance = new EWSType_ImportanceChoicesType();
$request->Items->CalendarItem->Importance->_ = EWSType_ImportanceChoicesType::NORMAL;

// Don't send meeting invitations.
$request->SendMeetingInvitations = EWSType_CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;

$response = $ews->CreateItem($request);
```

In Exchange 2010, the start and end times should be set without the timezone
offset. Instead, you should set the StartTimeZone and EndTimeZone properties. To
retrieve timezone definitions from you server, see
[Timezone: Retrieving Timezone Definitions](/php-ews/doc/0.1/examples/timezone-retrieving-timezone-definitions.html).

```php?start_inline=1
// Set the start and end times.
$date = new DateTime('8:00 AM');
$request->Items->CalendarItem->Start = $date->format('Y-m-d\TH:i:s');
$date->modify('+1 hour');
$request->Items->CalendarItem->End = $date->format('Y-m-d\TH:i:s');

// Build the timezone definition and set it as the StartTimeZone.
$request->Items->CalendarItem->StartTimeZone = new EWSType_TimeZoneDefinitionType();
$request->Items->CalendarItem->StartTimeZone->Id = 'Eastern Standard Time';
$request->Items->CalendarItem->StartTimeZone->Periods = new EWSType_NonEmptyArrayOfPeriodsType();

$period = new EWSType_PeriodType();
$period->Bias =  'PT5H';
$period->Name = 'Standard';
$period->Id = 'trule:Microsoft/Registry/Eastern Standard Time/2006-Standard';
$request->Items->CalendarItem->StartTimeZone->Periods->Period[] = $period;

$period = new EWSType_PeriodType();
$period->Bias =  'PT4H';
$period->Name = 'Daylight';
$period->Id = 'trule:Microsoft/Registry/Eastern Standard Time/2006-Daylight';
$request->Items->CalendarItem->StartTimeZone->Periods->Period[] = $period;

$period = new EWSType_PeriodType();
$period->Bias =  'PT5H';
$period->Name = 'Standard';
$period->Id = 'trule:Microsoft/Registry/Eastern Standard Time/2007-Standard';
$request->Items->CalendarItem->StartTimeZone->Periods->Period[] = $period;

$period = new EWSType_PeriodType();
$period->Bias =  'PT4H';
$period->Name = 'Daylight';
$period->Id = 'trule:Microsoft/Registry/Eastern Standard Time/2007-Daylight';
$request->Items->CalendarItem->StartTimeZone->Periods->Period[] = $period;

$request->Items->CalendarItem->StartTimeZone->TransitionsGroups = new EWSType_ArrayOfTransitionsGroupsType();
$request->Items->CalendarItem->StartTimeZone->TransitionsGroups->TransitionsGroup = array();

$group = new EWSType_ArrayOfTransitionsGroupsType();
$group->Id = 0;

$transition = new EWSType_RecurringDayTransitionType();
$transition->To = new EWSType_TransitionTargetType();
$transition->To->_ = 'trule:Microsoft/Registry/Eastern Standard Time/2006-Daylight';
$transition->To->Kind = new EWSType_KindType();
$transition->To->Kind->_ = EWSType_KindType::PERIOD;
$transition->TimeOffset = 'PT2H';
$transition->Month = 4;
$transition->Occurrence = new EWSType_OccurrenceType();
$transition->Occurrence->_ = EWSType_OccurrenceType::FIRST_FROM_BEGINNING;
$transition->DayOfWeek = new EWSType_DayOfWeekType();
$transition->DayOfWeek->_ = EWSType_DayOfWeekType::SUNDAY;
$group->RecurringDayTransition[] = $transition;

$transition = new EWSType_RecurringDayTransitionType();
$transition->To = new EWSType_TransitionTargetType();
$transition->To->_ = 'trule:Microsoft/Registry/Eastern Standard Time/2006-Standard';
$transition->To->Kind = new EWSType_KindType();
$transition->To->Kind->_ = EWSType_KindType::PERIOD;
$transition->TimeOffset = 'PT2H';
$transition->Month = 10;
$transition->Occurrence = new EWSType_OccurrenceType();
$transition->Occurrence->_ = EWSType_OccurrenceType::FIRST_FROM_END;
$transition->DayOfWeek = new EWSType_DayOfWeekType();
$transition->DayOfWeek->_ = EWSType_DayOfWeekType::SUNDAY;
$group->RecurringDayTransition[] = $transition;
$request->Items->CalendarItem->StartTimeZone->TransitionsGroups->TransitionsGroup[] = $group;

$group = new EWSType_ArrayOfTransitionsGroupsType();
$group->Id = 1;

$transition = new EWSType_RecurringDayTransitionType();
$transition->To = new EWSType_TransitionTargetType();
$transition->To->_ = 'trule:Microsoft/Registry/Eastern Standard Time/2006-Daylight';
$transition->To->Kind = new EWSType_KindType();
$transition->To->Kind->_ = EWSType_KindType::PERIOD;
$transition->TimeOffset = 'PT2H';
$transition->Month = 3;
$transition->Occurrence = new EWSType_OccurrenceType();
$transition->Occurrence->_ = EWSType_OccurrenceType::FIRST_FROM_BEGINNING;
$transition->DayOfWeek = new EWSType_DayOfWeekType();
$transition->DayOfWeek->_ = EWSType_DayOfWeekType::SUNDAY;
$group->RecurringDayTransition[] = $transition;

$transition = new EWSType_RecurringDayTransitionType();
$transition->To = new EWSType_TransitionTargetType();
$transition->To->_ = 'trule:Microsoft/Registry/Eastern Standard Time/2006-Standard';
$transition->To->Kind = new EWSType_KindType();
$transition->To->Kind->_ = EWSType_KindType::PERIOD;
$transition->TimeOffset = 'PT2H';
$transition->Month = 11;
$transition->Occurrence = new EWSType_OccurrenceType();
$transition->Occurrence->_ = EWSType_OccurrenceType::FIRST_FROM_END;
$transition->DayOfWeek = new EWSType_DayOfWeekType();
$transition->DayOfWeek->_ = EWSType_DayOfWeekType::SUNDAY;
$group->RecurringDayTransition[] = $transition;
$request->Items->CalendarItem->StartTimeZone->TransitionsGroups->TransitionsGroup[] = $group;


$request->Items->CalendarItem->StartTimeZone->Transitions = new EWSType_ArrayOfTransitionsType();
$request->Items->CalendarItem->StartTimeZone->Transitions->Transition = new EWSType_TransitionType();
$request->Items->CalendarItem->StartTimeZone->Transitions->Transition->To = new EWSType_TransitionTargetType();
$request->Items->CalendarItem->StartTimeZone->Transitions->Transition->To->_ = 0;
$request->Items->CalendarItem->StartTimeZone->Transitions->Transition->To->Kind = new EWSType_KindType();
$request->Items->CalendarItem->StartTimeZone->Transitions->Transition->To->Kind = EWSType_KindType::GROUP;

// The EndTimeZone is the same so just clone the StartTimeZone.
$request->Items->CalendarItem->EndTimeZone = clone $request->Items->CalendarItem->StartTimeZone;
```
