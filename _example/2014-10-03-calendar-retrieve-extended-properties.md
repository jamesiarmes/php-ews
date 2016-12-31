---
title:  "Calendar: Retrieve Extended Properties"
date:   2014-10-03
updated: 2014-10-03
category: 0.1
tags: calendar
---
Extended properties can be retrieved from a calendar entry, in this example,
`OnlineMeetingExternalLink` is the URL to a Lync meeting.

```php?start_inline=1
$item_id = ''; //e.g. AAAeABFuZHJleS5fdXByaDFub3ZAZnAtbWFyaW5lLlNvbQBGAAAAAACO4PBzuyEJTYBp5uGaRLNsBwA14Y7YwAwNSKAQKDMKwnWjAAIuTYgHAACUyTGM6SD5So28BizklbQLAAK4LwQBAAA=

$ews = new ExchangeWebServices($host,  $user, $password);
$request = new EWSType_GetItemType();

$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;
$request->ItemShape->AdditionalProperties = new EWSType_NonEmptyArrayOfPathsToElementType();

$extendedProperty = new EWSType_PathToExtendedFieldType();
$extendedProperty->PropertyName = 'OnlineMeetingExternalLink';
$extendedProperty->PropertyType = EWSType_MapiPropertyTypeType::STRING;
$extendedProperty->DistinguishedPropertySetId = EWSType_DistinguishedPropertySetIdType::PUBLIC_STRINGS;
$request->ItemShape->AdditionalProperties->ExtendedFieldURI = array($extendedProperty);

$request->ItemIds = new EWSType_NonEmptyArrayOfBaseItemIdsType();
$request->ItemIds->ItemId = new EWSType_ItemIdType();
$request->ItemIds->ItemId->Id = $item_id;

$response = $ews->GetItem($request);
echo '<pre>'.print_r($response, true).'</pre>';
```
