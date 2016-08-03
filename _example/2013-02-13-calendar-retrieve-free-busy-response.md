---
title:  "Calendar: Retrieve Free Busy Response"
date:   2013-02-13
updated: 2016-07-14
category: "0.1"
tags: calendar
---
**Note:** This works for Exchange Server 2007 & 2010

```php?start_inline=1
require_once('ExchangeWebServices.php');
require_once('NTLMSoapClient.php');
require_once('NTLMSoapClient/Exchange.php');
require_once('EWS_Exception.php');
require_once('EWSType.php');

spl_autoload_register(
        function ($class) {
            $class = explode('_', $class);
            if ($class[0] == 'EWSType')
                require_once $class[0] . '/' . $class[1] . '.php';
        }
);

//
// FILL THESE IN WITH ACTUAL VALUES
//
$host = '';
$username = ''; 
$password = '';
$user = ''; // user@domain.com

$ews = new ExchangeWebServices($host, $username, $password, ExchangeWebServices::VERSION_2007_SP1);

$request = new EWSType_GetUserAvailabilityRequestType();
$request->TimeZone = new EWSType_SerializableTimeZone();
$request->TimeZone->Bias = '480';
$request->TimeZone->StandardTime = new EWSType_SerializableTimeZoneTime();
$request->TimeZone->StandardTime->Bias = '0';
$request->TimeZone->StandardTime->Time = '02:00:00';
$request->TimeZone->StandardTime->DayOrder = '5';
$request->TimeZone->StandardTime->Month = '1';
$request->TimeZone->StandardTime->DayOfWeek = 'Sunday';
$request->TimeZone->DaylightTime = new EWSType_SerializableTimeZoneTime();
$request->TimeZone->DaylightTime->Bias = '-60';
$request->TimeZone->DaylightTime->Time = '02:00:00';
$request->TimeZone->DaylightTime->DayOrder = '1';
$request->TimeZone->DaylightTime->Month = '4';
$request->TimeZone->DaylightTime->DayOfWeek = 'Sunday';
$request->MailboxDataArray = new EWSType_ArrayOfMailboxData();
$request->MailboxDataArray->MailboxData = new EWSType_MailboxData();
$request->MailboxDataArray->MailboxData->Email = new EWSType_EmailAddress();
$request->MailboxDataArray->MailboxData->Email->Address = $user;
$request->MailboxDataArray->MailboxData->Email->RoutingType = 'SMTP';
$request->MailboxDataArray->MailboxData->AttendeeType = 'Required';
$request->MailboxDataArray->MailboxData->ExcludeConflicts = false;
$request->FreeBusyViewOptions = new EWSType_FreeBusyViewOptionsType();
$request->FreeBusyViewOptions->TimeWindow = new EWSType_Duration();
$request->FreeBusyViewOptions->TimeWindow->StartTime = '2013-02-01T08:00:00';
$request->FreeBusyViewOptions->TimeWindow->EndTime = '2013-03-01T18:00:00';
$request->FreeBusyViewOptions->MergedFreeBusyIntervalInMinutes = '30';
$request->FreeBusyViewOptions->RequestedView = 'Detailed';

$response = $ews->GetUserAvailability($request);
print_r($response,true);
```
