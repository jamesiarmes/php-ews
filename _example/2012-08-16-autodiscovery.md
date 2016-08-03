---
title:  "Autodiscovery"
date:   2012-08-16
updated: 2015-12-28
category: "0.1"
tags: autodiscovery
---
You can use the `EWSAutodiscover` class to detect the correct URL for your
exchange server and retrieve proper client settings. The easiest way to utilize
autodiscovery would be the following:

```php?start_inline=1
$ews = EWSAutodiscover::getEWS($email, $password);
```

If you need to specify the path to a valid Certificate Authority, you can use
the following:

```php?start_inline=1
$auto = new EWSAutodiscover($email, $password);
$auto->setCAInfo('/path/to/your/cacert.pem');
$ews = $auto->newEWS();
```

In both examples, `$ews` will either be `false` or an instance of
`ExchangeWebServices`.

## If getEWS() fails

If the static function fails, another way of obtaining the server address is
directly _via_ 3rd party clients such as Outlook or even the Apple iPhone, both
of which use Exchange Autodiscovery. In Control Panel->Mail, create a new email
account and enter name, email address and password and click next. After a while
Outlook will autodiscover the server and setup the email. Double click on the
account in "Account Settings" and in the prompt window you will see the server
and your selected username/email. However, this server address is unlikely to be
correct in my experience, but try it anyway. If this fails, click "More
Settings" in the same window->Connection Tab->Exchange Proxy Settings, after
which you will see an https:// address to the URL which Outlook connects to for
the Exchange. Now simply use that in your code without https:// as `$server`:

```php?start_inline=1
$ews = new ExchangeWebServices($server, $email_with_at_sign, $password);
```
Autodiscovery can also be performed on the iPhone using the Exchnage service in
Settings->Mail. 

Additionally, one last attempt would be to use `$server = 'outlook.com'` since
some institutions host their Exchange on the Outlook website directly. 

For more information in the Exchange Autodiscovery implementation, see the
following resources:

* http://technet.microsoft.com/en-us/library/bb332063(EXCHG.80).aspx
* http://technet.microsoft.com/en-us/library/bb124251.aspx
* https://www.testexchangeconnectivity.com
