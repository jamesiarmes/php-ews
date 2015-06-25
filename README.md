# PHP Exchange Web Services
The PHP Exchange Web Services library (php-ews) is intended to make communication with Microsoft Exchange servers using Exchange Web Services easier. It handles the NTLM authentication required to use the SOAP services and provides an object-oriented interface to the complex types required to form a request.

# Dependencies
* PHP 5.2+
* cURL with NTLM support (7.23.0+ recommended)
* Exchange 2007 or 2010*

**Note: Not all operations or request elements are supported on Exchange 2007.*


## Installation
Require the composer package and use away

```
composer require garethp/php-ews
```

## Usage
The library can be used to make several different request types. In order to make a request, you need to instantiate a new `ExchangeWebServices` object:

```php
$ews = new ExchangeWebServices($server, $username, $password, $version);
```

The `ExchangeWebServices` class takes four parameters for its constructor:

* `$server`: The url to the exchange server you wish to connect to, without the protocol. Example: mail.example.com. If you have trouble determing the correct url, you could try using the [`EWSAutodiscover`](https://github.com/jamesiarmes/php-ews/wiki/Autodiscovery) class.
* `$username`: The user to connect to the server with. This is usually the local portion of the users email address. Example: "user" if the email address is "user@example.com".
* `$password`: The user's plain-text password.
* `$version` (optional): The version of the Exchange sever to connect to. Valid values can be found at `ExchangeWebServices::VERSION_*`. Defaults to Exchange 2007.

Once you have your `ExchangeWebServices` object, you need to build your request object. The type of object depends on the operation you are calling. If you are using an IDE with code completion it should be able to help you determine the correct classes to use using the provided docblocks.

The request objects are build similar to the XML body of the request. See the resources section below for more information on building the requests.

## Building Request
There are a few ways to build your request, varying on how much code completion you want your IDE to provide. The first way, using types for everything, provides the most code completion, is done as so

```php
$ews = new ExchangeWebServices($server, $username, $password, ExchangeWebServices::VERSION_2010);

$request = new Type\CreateItemType();
$request->Items = new Type\ArrayOfTypes();

$start = new DateTime('8:00 AM');
$end = new DateTime('9:00 AM');

$event = new Type\CalendarItem();
$event->Start = $start->format('c');
$event->End = $end->format('c');

$event->Body = new Type\BodyType();
$event->Body->BodyType = Enumeration\BodyTypeType::HTML;
$event->Body->_ = 'This is <b>the</b> body';

// Set the item class type (not required).
$event->ItemClass = new Enumeration\ItemClassType();
$event->ItemClass->_ = Enumeration\ItemClassType::APPOINTMENT;

// Set the sensativity of the event (defaults to normal).
$event->Sensitivity = new Enumeration\SensitivityChoicesType();
$event->Sensitivity->_ = Enumeration\SensitivityChoicesType::NORMAL;

$event->Categories = array('Testing', 'php-ews');

// Set the importance of the event.
$event->Importance = new Enumeration\ImportanceChoicesType();
$event->Importance->_ = Enumeration\ImportanceChoicesType::NORMAL;

$request->Items->CalendarItem = $event;

$request->SendMeetingInvitations = Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;
$response = $ews->CreateItem($request);
```

The second way is a bit less formal, where you can create the objects yourself from Type. This is more useful if you still want to use Objects, but there isn't one provided that you need

```php
$start = new DateTime('8:00 AM');
$end = new DateTime('9:00 AM');

$request = new Type();
$request->Items = new Type();
$request->SendMeetingInvitations = Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE;

$event = new Type();
$event->Start = $start->format('c');
$event->End = $end->format('c');
$event->Body = array(
    'BodyType' => Enumeration\BodyTypeType::HTML,
    '_value' => 'This is <b>the</b> body'
);
$event->ItemClass = Enumeration\ItemClassType::APPOINTMENT;
$event->Sensitivity = Enumeration\SensitivityChoicesType::NORMAL;
$event->Categories = array('Testing', 'php-ews');
$event->Importance = Enumeration\ImportanceChoicesType::NORMAL;

$request->Items->CalendarItem = $event;
```

And the final way is to create an array, and have an object built from that array

```php
$start = new DateTime('8:00 AM');
$end = new DateTime('9:00 AM');

$request = array(
    'Items' => array(
        'CalendarItem' => array(
            'Start' => $start->format('c'),
            'End' => $end->format('c'),
            'Body' => array(
                'BodyType' => Enumeration\BodyTypeType::HTML,
                '_value' => 'This is <b>the</b> body'
            ),
            'ItemClass' => Enumeration\ItemClassType::APPOINTMENT,
            'Sensitivity' => Enumeration\SensitivityChoicesType::NORMAL,
            'Categories' => array('Testing', 'php-ews'),
            'Importance' => Enumeration\ImportanceChoicesType::NORMAL
        )
    ),
    'SendMeetingInvitations' => Enumeration\CalendarItemCreateOrDeleteOperationType::SEND_TO_NONE
);

$request = Type::buildFromArray($request);
$response = $ews->CreateItem($request);
```


## Resources
* [PHP Exchange Web Services Wiki](https://github.com/jamesiarmes/php-ews/wiki)
* [Exchange 2007 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=EXCHG.80\).aspx)
* [Exchange 2010 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=exchg.140\).aspx)

## Support
All questions should use the [issue queue](https://github.com/jamesiarmes/php-ews/issues). This allows the community to contribute to and benefit from questions or issues you may have. Any support requests sent to my email address will be directed here.

## Contributions
Contributions are always welcome!

### Contributing Code
If you would like to contribute code please fork the repository on [github](https://github.com/jamesiarmes/php-ews) and issue a pull request against the master branch. It is recommended that you make any changes to your fork in a separate branch that you would then use for the pull request. If you would like to receive credit for your contribution outside of git, please add your name and email address (optional) to the CONTRIBUTORS.txt file. All contributions should follow the [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and [PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standards.

### Contributing Documentation
If you would like to contribute to the documentation, please feel free to update the [wiki](https://github.com/jamesiarmes/php-ews/wiki). I request that you do not make changes to the home page but other pages (including new ones) are fair game. Please leave a descriptive log message for any changes that you make.

### Other Contributions
Have you found this library helpful? Why not take a minute to endorse my hard work on [coderwall](http://coderwall.com)! Just click the badge below:

[![Build Status](https://travis-ci.org/Garethp/php-ews.svg?branch=master)](https://magnum.travis-ci.com/garethp/php-ews)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/garethp/php-ews/badges/quality-score.png)](https://scrutinizer-ci.com/g/true/php-ripe/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/garethp/php-ews/badges/coverage.png)](https://scrutinizer-ci.com/g/true/php-ripe/?branch=master)
