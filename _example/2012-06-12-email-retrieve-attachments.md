---
title:  "Email: Retrieve Attachments"
date:   2012-06-12
updated: 2014-11-30
category: 0.1
tags: email, attachments
---
```php?start_inline=1
$message_id = ''; // Id of the email message
$save_dir = __DIR__; // Saves into the current dir

$ews = new ExchangeWebServices($host,  $user, $password);

$request = new EWSType_GetItemType();

$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

$request->ItemIds = new EWSType_NonEmptyArrayOfBaseItemIdsType();
$request->ItemIds->ItemId = new EWSType_ItemIdType();
$request->ItemIds->ItemId->Id = $message_id; 

$response = $ews->GetItem($request);

if ($response->ResponseMessages->GetItemResponseMessage->ResponseCode == 'NoError' &&
    $response->ResponseMessages->GetItemResponseMessage->ResponseClass == 'Success') {
    $message = $response->ResponseMessages->GetItemResponseMessage->Items->Message;

    if(!empty($message->Attachments->FileAttachment)) {
        // FileAttachment attribute can either be an array or instance of stdClass...
        $attachments = array();
        if(is_array($message->Attachments->FileAttachment) === FALSE ) {
            $attachments[] = $message->Attachments->FileAttachment;
        }
        else {
            $attachments = $message->Attachments->FileAttachment;
        }

        foreach($attachments as $attachment) {
            $request = new EWSType_GetAttachmentType();
            $request -> AttachmentIds = new EWSType_NonEmptyArrayOfRequestAttachmentIdsType();
            $request -> AttachmentIds -> AttachmentId = new EWSType_RequestAttachmentIdType();
            $request->AttachmentIds->AttachmentId->Id = $attachment->AttachmentId->Id;
            $response = $ews->GetAttachment($request);

            // Assuming response was successful ...
            $attachments = $response->ResponseMessages->GetAttachmentResponseMessage->Attachments;
            $content = $attachments->FileAttachment->Content;

            file_put_contents($save_dir.'/'.$attachment->Name, $content);
        }
    }
    else {
        echo "No attachments found\n";
    }
}
```
