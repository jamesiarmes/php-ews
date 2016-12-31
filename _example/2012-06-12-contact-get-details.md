---
title:  "Contact: Get Details"
date:   2012-06-12
updated: 2012-06-12
category: 0.1
tags: contact
---
```php?start_inline=1
$contact_id = ''; //e.g. AAAeABFuZHJleS5fdXByaDFub3ZAZnAtbWFyaW5lLlNvbQBGAAAAAACO4PBzuyEJTYBp5uGaRLNsBwA14Y7YwAwNSKAQKDMKwnWjAAIuTYgHAACUyTGM6SD5So28BizklbQLAAK4LwQBAAA=

$ews = new ExchangeWebServices($host,  $user, $password);
$request = new EWSType_GetItemType();

$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

$request->ItemIds = new EWSType_NonEmptyArrayOfBaseItemIdsType();
$request->ItemIds->ItemId = new EWSType_ItemIdType();
$request->ItemIds->ItemId->Id = $contact_id; 

$response = $ews->GetItem($request);
echo '<pre>'.print_r($response, true).'</pre>';
```
