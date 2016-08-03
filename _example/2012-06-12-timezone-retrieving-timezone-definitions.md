---
title:  "Timezone: Retrieving Timezone Definitions"
date:   2012-06-12
updated: 2012-06-12
category: "0.1"
tags: timezone
---
There are two examples for retrieving timezone definitions below. The first will
retrieve the definition for specific timezones while the second will retrieve
the definition for all timezones supported by the server.

**Note:** _The GetServerTimeZones operation was introduced in Exchange 2010 and
therefore is unavailable on Exchange 2007 servers._

## Specific timezone definitions

```php?start_inline=1
$ews = new ExchangeWebServices($host, $user, $pass, $version);

$request = new EWSType_GetServerTimeZonesType();
$request->Ids = new EWSType_NonEmptyArrayOfTimeZoneIdType();
$request->Ids->Id[] = 'Eastern Standard Time';
$request->Ids->Id[] = 'Pacific Standard Time';

$response = $ews->GetServerTimeZones($request);
var_dump($response);
```

## All supported timezone definitions

```php?start_inline=1
$ews = new ExchangeWebServices($host, $user, $pass, $version);

$request = new EWSType_GetServerTimeZonesType();

$response = $ews->GetServerTimeZones($request);
var_dump($response);
```
