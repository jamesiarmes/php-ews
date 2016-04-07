# PHP Exchange Web Services
[![Build Status](https://travis-ci.org/Garethp/php-ews.svg?branch=master)](https://travis-ci.org/Garethp/php-ews)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/garethp/php-ews/badges/quality-score.png)](https://scrutinizer-ci.com/g/garethp/php-ews/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/garethp/php-ews/badges/coverage.png)](https://scrutinizer-ci.com/g/garethp/php-ews/?branch=master)

The PHP Exchange Web Services library (php-ews) is intended to make communication with Microsoft Exchange servers using Exchange Web Services easier. It handles the NTLM authentication required to use the SOAP services and provides an object-oriented interface to the complex types required to form a request.

# Dependencies
* PHP 5.5+
* cURL with NTLM support (7.23.0+ recommended)
* Composer
* Exchange 2007 or 2010*

**Note: Not all operations or request elements are supported on Exchange 2007.*


# Installation
Require the composer package and use away

```
composer require garethp/php-ews
```

# Upcoming Backwards Compatibility Breaking Change
As of version `0.8`, the namespace of all classes will change from `jamesiarmes\PEWS` to `garethp\ews`

# Usage
The library can be used to make several different request types. In order to make a request, you need to instantiate a new `ExchangeWebServices` object:

```php
$ews = ExchangeWebServices::fromUsernameAndPassword($server, $username, $password, $options = array());
```

The `ExchangeWebServices::fromUsernameAndPassword` static constructor takes four parameters:

* `$server`: The url to the exchange server you wish to connect to, without the protocol. Example: mail.example.com. If you have trouble determing the correct url, you could try using the [`EWSAutodiscover`](https://github.com/jamesiarmes/php-ews/wiki/Autodiscovery) class.
* `$username`: The user to connect to the server with. This is usually the local portion of the users email address. Example: "user" if the email address is "user@example.com".
* `$password`: The user's plain-text password.
* `$options`: (optional): A group of options to be passed in
* `$options['version']`: The version of the Exchange sever to connect to. Valid values can be found at `ExchangeWebServices::VERSION_*`. Defaults to Exchange 2007.
* `$options['timezone']`: A timezone to use for operations. This isn't a PHP Timezone, but a Timezone ID as defined by Exchange. Sorry, I don't have a list for them yet
* `$options['httpClient']`: If you want to inject your own GuzzleClient for the requests
* `$options['httpPlayback']`: See the Testing Section

Once you have your `ExchangeWebServices` object, you need to build your request object. The type of object depends on the operation you are calling. If you are using an IDE with code completion it should be able to help you determine the correct classes to use using the provided docblocks.

The request objects are build similar to the XML body of the request. See the resources section below for more information on building the requests.

# Simple Library Usage
There's work in progress to simplify some operations so that you don't have to create the requests yourself.
Examples are located [here](examples/) to browse in small snippets. If you have more examples you want to add, just make
a PR for it. If you would like to request an example, file a Github issue, and I'll try to create it if I know how

# Manual Usage
While simple library usage is the way to go for what it covers, it doesn't cover everything, in fact it covers rather
little. If you want to do anything outside of it's scope, go ahead and use `ExchangeWebServices` as a generic SOAP
client, and refer to the Microsoft documentation on how to build your requests. Here's an example

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

# Testing
Testing is done simply, and easy, wit the use of my own HttpPlayback functionality. The HttpPlayback functionality
is basically a built in History and MockResponses Middleware for Guzzle. With a flick of an option, you can either run
all API calls "live" (Without interference), "record" (Live, but saves all the responses in a file) or "playback" (Use
the record file for responses, never hitting the exchange server). This way you can write your tests with the intention
to hit live, record the responses, then use those easily. You can even have different phpunit.xml files to switch between
them, like this library does. Here's some examples of running the different modes:

```php
$client = Api::withUsernameAndPassword(
    'server',
    'user',
    'password',
    [
        'httpPlayback' => [
            'mode' => 'record',
            'recordLocation' => __ROOT__ . DS . /recordings.json'
        ]
    ]
);

//Do some API calls here
```

That will then record al lthe responses to the recordings.json file. Likewise, to play back

```php
$client = API::withUsernameAndPassword(
    'server',
    'user',
    'password',
    [
        'httpPlayback' => [
            'mode' => 'playback',
            'recordLocation' => __ROOT__ . DS . /recordings.json'
        ]
    ]
);

//Do some API calls here
```

And then those calls will play back from the recorded files, allowing you to continuously test all of your logic fully
without touching the live server, while still allowing you to double check that it really works before release by
changing the mode option.

# Versioning
The versioning of this component is done to comply with [semver](http://semver.org/) standards. This means that any BC breaks that are made will result in an increasing Major Version number (IE: 1.x -> 2.x),
and new features that do not result in BC breaks will result in Minor version increases (IE: 1.1.x -> 1.2.0) and bug fixes that do not result in new features or BC breaks will result in the Patch number
increasing (IE: 1.0.0 -> 1.0.1). The exception is development pre-1.0 release, where the Minor number is treated as a Major and the patch number is treated as both Patch and Minor numbers. That means
that you can pin your composer to, say, 0.6.* and you will not receive any BC breaks, as BC breaks will result in the Minor version changing.

# Resources
* [Exchange 2007 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=EXCHG.80\).aspx)
* [Exchange 2010 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=exchg.140\).aspx)

# Support
All questions should use the [issue queue](https://github.com/garethp/php-ews/issues). This allows the community to
contribute to and benefit from questions or issues you may have. Any support requests sent to my email address will be directed here.

# Contributions
Contributions are always welcome!

### Contributing Code
If you would like to contribute code please fork the repository on [github](https://github.com/jamesiarmes/php-ews) and
issue a pull request against the master branch. It is recommended that you make any changes to your fork in a separate
branch that you would then use for the pull request. If you would like to receive credit for your contribution outside
of git, please add your name and email address (optional) to the CONTRIBUTORS.txt file. All contributions should follow
the [PSR-1](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-1-basic-coding-standard.md) and
[PSR-2](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md) coding standards.
If you're interested in a list of things that still needs to be done, check out the [TODO.md](TODO.md) file

### Contributing Documentation
If you would like to contribute to the documentation, make a PR against this repository with documentation as examples in
the [examples/](examples/) folder. I request that you do not make changes to the home page but other pages (including new ones)
are fair game. Please leave a descriptive log message for any changes that you make.
