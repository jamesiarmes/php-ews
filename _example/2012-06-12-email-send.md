---
title:  "Email: Send"
date:   2012-06-12
updated: 2012-06-12
category: 0.1
tags: email
---
Example of how to send a simple email message.

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

class EwsSendEmail
{
    protected function sendEmail()
    {
        $server = 'exchange.domain.com';
        $username = 'mark.sneed@domain.com';
        $password = 'Password';
        
        
        $ews = new ExchangeWebServices($server, $username, $password);

        $msg = new EWSType_MessageType();
        
        $toAddresses = array();
        $toAddresses[0] = new EWSType_EmailAddressType();
        $toAddresses[0]->EmailAddress = 'john.harris@domain.com';
        $toAddresses[0]->Name = 'John Harris';
        
        // Multiple recipients
        //$toAddresses[1] = new EWSType_EmailAddressType();
        //$toAddresses[1]->EmailAddress = 'sara.smith@domain.com';
        //$toAddresses[1]->Name = 'Sara Smith';

        $msg->ToRecipients = $toAddresses;
        
        $fromAddress = new EWSType_EmailAddressType();
        $fromAddress->EmailAddress = 'mark.sneed@domain.com';
        $fromAddress->Name = 'Mark Sneed';

        $msg->From = new EWSType_SingleRecipientType();
        $msg->From->Mailbox = $fromAddress;
        
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
