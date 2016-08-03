---
title:  "Contact: Set and Update Photo"
date:   2014-08-06
updated: 2014-08-06
category: "0.1"
tags: contact
---
```php?start_inline=1
$contact_id = ''; //e.g. AAAeABFuZHJleS5fdXByaDF...

$ews = new ExchangeWebServices($host, $user, $password);
    
$attachment = new EWSType_FileAttachmentType();
$attachment->Content = file_get_contents("Path/to/image/");
$attachment->Name = 'ContactPicture.jpg';
$attachment->ContentType = 'image/jpeg';
$attachment->IsContactPhoto = true;

$request = new EWSType_CreateAttachmentType();

$request->ParentItemId->Id = $contact_id;
$request->Attachments = new EWSType_NonEmptyArrayOfAttachmentsType();
$request->Attachments->FileAttachment[] = $attachment;

$response = $ews->CreateAttachment($request);
echo '<pre>'.print_r($response).'</pre>';
```
