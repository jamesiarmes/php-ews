---
title:  "Email: Send with Attachment"
date:   2012-06-12
updated: 2012-08-12
category: "0.1"
tags: email, attachments
---
Example on how to send an email with an attachment.

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
require_once('EWSType/ArrayOfRecipientsType.php');
require_once('EWSType/NonEmptyArrayOfAllItemsType.php');
require_once('EWSType/ItemType.php');
require_once('EWSType/ExchangeImpersonationType.php');
require_once('EWSType/ConnectingSIDType.php');
require_once('EWSType/FileAttachmentType.php');
require_once('EWSType/CreateAttachmentType.php');
require_once('EWSType/SendItemType.php');
require_once('EWSType/ItemIdType.php');
require_once('EWSType/TargetFolderIdType.php');
require_once('EWSType/DistinguishedFolderIdType.php');
require_once('EWSType/NonEmptyArrayOfAttachmentsType.php');

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
        
        // Create message
        $msg = new EWSType_MessageType();
        $toAddresses = array();
        $toAddresses[0] = new EWSType_EmailAddressType();
        $toAddresses[0]->EmailAddress = 'sara.smith@domain.com';
        $toAddresses[0]->Name = 'Sara Smith';
        
        $msg->ToRecipients = $toAddresses;
        $msg->Subject = 'Test email message';
        
        $msg->Body = new EWSType_BodyType();
        $msg->Body->BodyType = 'HTML';
        $msg->Body->_ = '<p style="font-size: 18px;"><b>Test email msg from php ews library</b></p>';
        
        // Save message
        $msgRequest = new EWSType_CreateItemType();
        $msgRequest->Items = new EWSType_NonEmptyArrayOfAllItemsType();
        $msgRequest->Items->Message = $msg;
        $msgRequest->MessageDisposition = 'SaveOnly';
        $msgRequest->MessageDispositionSpecified = true;
        
        $msgResponse = $ews->CreateItem($msgRequest);
        $msgResponseItems = $msgResponse->ResponseMessages->CreateItemResponseMessage->Items;
        
        // Create attachment(s)
        $attachments = array();
        $attachments[0] = new EWSType_FileAttachmentType();
        $attachments[0]->Content = file_get_contents('path-to-file.pdf');
        $attachments[0]->Name = 'File Name.pdf';
        $attachments[0]->ContentType = 'application/pdf';
        
        // Attach files to message
        $attRequest = new EWSType_CreateAttachmentType();
        $attRequest->ParentItemId = $msgResponseItems->Message->ItemId;
        $attRequest->Attachments = new EWSType_NonEmptyArrayOfAttachmentsType();
        $attRequest->Attachments->FileAttachment = $attachments;
        
        $attResponse = $ews->CreateAttachment($attRequest);
        $attResponseId = $attResponse->ResponseMessages->CreateAttachmentResponseMessage->Attachments->FileAttachment->AttachmentId;
        
        // Save message id from create attachment response
        $msgItemId = new EWSType_ItemIdType();
        $msgItemId->ChangeKey = $attResponseId->RootItemChangeKey;
        $msgItemId->Id = $attResponseId->RootItemId;
        
        // Send and save message
        $msgSendRequest = new EWSType_SendItemType();
        $msgSendRequest->ItemIds = new EWSType_NonEmptyArrayOfBaseItemIdsType();
        $msgSendRequest->ItemIds->ItemId = $msgItemId;
        $msgSendRequest->SavedItemFolderId = new EWSType_TargetFolderIdType();
        $sentItemsFolder = new EWSType_DistinguishedFolderIdType();
        $sentItemsFolder->Id = 'sentitems';
        $msgSendRequest->SavedItemFolderId->DistinguishedFolderId = $sentItemsFolder;
        $msgSendRequest->SaveItemToFolder = true;
        $msgSendResponse = $ews->SendItem($msgSendRequest);
        
        //var_dump($msgSendResponse);
    }
    
    function __construct()
    {
        $this->sendEmail();
    }
}

$page = new EwsSendEmail();
```
