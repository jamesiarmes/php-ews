---
title:  "Email: Impersonation"
date:   2012-06-12
updated: 2015-06-12
category: 0.1
tags: email, impersonation
---
An example of how to send an email using impersonation. Before impersonation
will work you need to add the impersonation rights to a user using powershell.
See this article for more information
<http://msdn.microsoft.com/en-us/library/bb204095%28EXCHG.140%29.aspx>.

```php?start_inline=1
require_once('ExchangeWebServices.php');
require_once('NTLMSoapClient.php');
require_once('NTLMSoapClient/Exchange.php');
require_once('EWS_Exception.php');
require_once('EWSType.php');

require_once('EWSType/MessageType.php');
require_once('EWSType/EmailAddressType.php');
require_once('EWSType/BodyType.php');
require_once('EWSType/SingleRecipientType.php');
require_once('EWSType/CreateItemType.php');
require_once('EWSType/NonEmptyArrayOfAllItemsType.php');
require_once('EWSType/ItemType.php');
require_once('EWSType/ExchangeImpersonationType.php');
require_once('EWSType/ConnectingSIDType.php');
class EwsSendEmail
{
    protected function sendEmail()
    {
        $server = 'exchange.domain.com';
        $username = 'apiuser@domain.com';
        $password = 'password';
        
        
        $ews = new ExchangeWebServices($server, $username, $password);

        // Configure impersonation
        $ei = new EWSType_ExchangeImpersonationType();
        $sid = new EWSType_ConnectingSIDType();
        $sid->PrimarySmtpAddress = 'mark.sneed@domain.com';
        $ei->ConnectingSID = $sid;
        $ews->setImpersonation($ei);
        
        $msg = new EWSType_MessageType();
        
        $toAddresses = array();
        $toAddresses[0] = new EWSType_EmailAddressType();
        $toAddresses[0]->EmailAddress = 'sara.smith@domain.com';
        $toAddresses[0]->Name = 'Sara Smith';

        $msg->ToRecipients = $toAddresses;
        
        $msg->Subject = 'Test email message';
        
        $msg->Body = new EWSType_BodyType();
        $msg->Body->BodyType = 'HTML';
        $msg->Body->_ = '<p style="font-size: 18px; font-weight: bold;">Test email message from php ews library.</p>';
        
        $msgRequest = new EWSType_CreateItemType();
        $msgRequest->Items = new EWSType_NonEmptyArrayOfAllItemsType();
        $msgRequest->Items->Message = $msg;
        $msgRequest->MessageDisposition = 'SendAndSaveCopy';
        $msgRequest->MessageDispositionSpecified = true;
                
        $response = $ews->CreateItem($msgRequest);
        var_dump($response);
    }
    
    function __construct()
    {
        $this->sendEmail();
    }
}
$page = new EwsSendEmail();
```
