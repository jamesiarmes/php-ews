PHP Exchange Web Services
===================================

The PHP Exchange Web Services library (php-ews) is intended to make
communication with Microsoft Exchange servers using Exchange Web Services
easier. It handles the NTLM authentication required to use the SOAP
services and provides an object-oriented interface to the complex types
required to form a request.


[![Scrutinizer](https://img.shields.io/scrutinizer/g/jamesiarmes/php-ews.svg?style=flat-square)](https://scrutinizer-ci.com/g/jamesiarmes/php-ews)
[![Total Downloads](https://img.shields.io/packagist/dt/php-ews/php-ews.svg?style=flat-square)](https://packagist.org/packages/php-ews/php-ews)

Dependencies
------------

 * Composer
 * PHP 5.4 or greater
 * cURL with NTLM support (7.30.0+ recommended)
 * Exchange 2007 or later

**Note: Not all operations or request elements are supported on all versions of
Exchange.**


Installation
------------

The prefered installation method is via Composer, which will automatically
handle autoloading of classes.

```json
{
    "require": {
        "php-ews/php-ews": "~1.0"
    }
}
```

## Usage
The library can be used to make several different request types. In order to
make a request, you need to instantiate a new `\jamesiarmes\PhpEws\Client`
object:

```php
use \jamesiarmes\PhpEws\Client;

$ews = new Client($server, $username, $password, $version);
```

The `Client` class takes four parameters for its constructor:

 * `$server`: The url to the exchange server you wish to connect to, without
 the protocol. Example: mail.example.com. If you have trouble determining the
 correct url, you could try using the
 [`\jamesiarmes\PhpEws\Autodiscover`](https://github.com/jamesiarmes/php-ews/wiki/Autodiscovery)
 class.
 * `$username`: The user to connect to the server with. This is usually the
 local portion of the users email address. Example: "user" if the email address
 is "user@example.com".
 * `$password`: The user's plain-text password.
 * `$version` (optional): The version of the Exchange sever to connect to. Valid
 values can be found at `\jamesiarmes\PhpEws\Client::VERSION_*`. Defaults to
 Exchange 2007.

Once you have your `\jamesiarmes\PhpEws\Client` object, you need to build your
request object. The type of object depends on the operation you are calling. If
you are using an IDE with code completion it should be able to help you
determine the correct classes to use using the provided docblocks.

The request objects are build similar to the XML body of the request. See the
resources section below for more information on building the requests.

## Examples
There are a number of examples included in the examples directory. These
examples are meant to be run from the command line. In each, you will need to
set the connection information variables to match those of your Exchange server.
For some of them, you will also need to set ids or additional data that will be
used in the request.

## Resources
* [php-ews Website](http://jamesarmes.com/php-ews/)
* [Exchange 2007 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=EXCHG.80\).aspx)
* [Exchange 2010 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=exchg.140\).aspx)
* [Exchange 2013 Web Services Reference](http://msdn.microsoft.com/library/bb204119\(v=exchg.150\).aspx)

## Support
All questions should use the
[issue queue](https://github.com/jamesiarmes/php-ews/issues). This allows the
community to contribute to and benefit from questions or issues you may have.
Any support requests received via email will be directed here.
