PhpEws - PHP Exchange Web Services
===================================

The PHP Exchange Web Services library (php-ews) is intended to make
communication with Microsoft Exchange servers using Exchange Web Services
easier. It handles the NTLM authentication required to use the SOAP
services and provides an object-oriented interface to the complex types
required to form a request.

__This is a forked version__ of the original GitHub project at [jamesiarmes/php-ews](/jamesiarmes/php-ews) to bring Composer installation,
namespaces and PSR-0 autoloading of classes.


[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/adamelso/php-ews/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/adamelso/php-ews/?branch=master)


Dependencies
------------

 * Composer
 * PHP 5.4 or greater
 * cURL with NTLM support (7.23.0+ recommended)
 * Exchange 2007 or 2010*

**Note: Not all operations or request elements are supported on Exchange 2007.*


Installation (WIP)
------------------

The prefered installation method is via Composer, which will automatically handle autoloading of classes.

```json
{
    "require": {
        "php-ews/php-ews": "dev-master"
    }
}
```


## Usage
The library can be used to make several different request types. In order to make a request, you need to instantiate a new `ExchangeWebServices` object:

```php
use PhpEws\EwsConnection;

$ews = new EwsConnection($server, $username, $password, $version);
```

The `EwsConnection` class takes four parameters for its constructor:

 * `$server`: The url to the exchange server you wish to connect to, without the protocol. Example: mail.example.com. If you have trouble determing the correct url, you could try using the [`PhpEws\AutodiscoveryManager`](https://github.com/jamesiarmes/php-ews/wiki/Autodiscovery) class.
 * `$username`: The user to connect to the server with. This is usually the local portion of the users email address. Example: "user" if the email address is "user@example.com".
 * `$password`: The user's plain-text password.
 * `$version` (optional): The version of the Exchange sever to connect to. Valid values can be found at `EwsConnection::VERSION_*`. Defaults to Exchange 2007.

Once you have your `EwsConnection` object, you need to build your request object. The type of object depends on the operation you are calling. If you are using an IDE with code completion it should be able to help you determine the correct classes to use using the provided docblocks.

The request objects are build similar to the XML body of the request. See the resources section below for more information on building the requests.

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

[![](http://api.coderwall.com/jamesiarmes/endorsecount.png)](http://coderwall.com/jamesiarmes)
