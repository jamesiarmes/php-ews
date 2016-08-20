---
title:  "Search Expression: Simple Conditions"
date:   2012-09-07
updated: 2015-10-02
category: "0.1"
tags: search
---
The following examples demonstrate how to use single search expressions to
create a simple search for items.

All examples are in the context of a search for contacts and imply the following
prior to each sample. See
[Contact: List](/php-ews/doc/0.1/examples/contact-list) for more information on
searching for contacts.

```php?start_inline=1
$ews = new ExchangeWebServices($host, $user, $pass, $version);

$request = new EWSType_FindItemType();
$request->ContactsView = new EWSType_ContactsViewType();
$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;

$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CONTACTS;
```

Each example should also end with making the request and dumping the response.

```php?start_inline=1
$response = $ews->FindItem($request);
var_dump($response);
```

## Contains
You can utilize a contains restriction to search for items where a field contain
a certain substring. You specify whether that substring should be only at the
beginning of the field, the beginning of a word, or anywhere in the string. You
can also specify whether or not to ignore case and spacing.

```php?start_inline=1
// Build a new contains expression.
$request->Restriction = new EWSType_RestrictionType();
$request->Restriction->Contains = new EWSType_ContainsExpressionType();

// Search the contacts given (first) name.
$request->Restriction->Contains->FieldURI = new EWSType_PathToUnindexedFieldType();
$request->Restriction->Contains->FieldURI->FieldURI = 'contacts:GivenName';

// Search where the name contains the letter 'c'.
$request->Restriction->Contains->Constant = new EWSType_ConstantValueType();
$request->Restriction->Contains->Constant->Value = 'c';

// We don't care about case.
$request->Restriction->Contains->ContainmentComparison = new EWSType_ContainmentComparisonType();
$request->Restriction->Contains->ContainmentComparison->_ = EWSType_ContainmentComparisonType::IGNORE_CASE;

// We only want contacts where the name starts with our expression.
$request->Restriction->Contains->ContainmentMode = new EWSType_ContainmentModeType();
$request->Restriction->Contains->ContainmentMode->_ = EWSType_ContainmentModeType::PREFIXED;
```

## Excludes
Excludes can be used for bitwise comparison against an integer field. It will
return each item that does _not_ contain the specified bitmask for the field
value. The mask can be specified in either base-10 or base-16 format. For
example, if you have a custom property on contacts for the school that you
attended with the contact that uses a bitwise value you may want all contacts
that you did not go to high school with.

Let's use these values for our schools.

```php?start_inline=1
const SCHOOL_NONE = 0;
const SCHOOL_ELEMENTARY = 1;
const SCHOOL_MIDDLE = 2;
const SCHOOL_HIGH = 4;
const SCHOOL_COLLEGE = 8;
const SCHOOL_GRADUATE = 16;
```

```php?start_inline=1
// Build a new excludes expression.
$request->Restriction = new EWSType_RestrictionType();
$request->Restriction->Excludes = new EWSType_ExcludesType();

// We want to exclude the mask from the schools attended with field.
$request->Restriction->Excludes->ExtendedFieldURI = new EWSType_PathToExtendedFieldType();
$request->Restriction->Excludes->ExtendedFieldURI->DistinguishedPropertySetId = new EWSType_DistinguishedPropertySetIdType();
$request->Restriction->Excludes->ExtendedFieldURI->DistinguishedPropertySetId->_ = EWSType_DistinguishedPropertySetIdType::PUBLIC_STRINGS;
$request->Restriction->Excludes->ExtendedFieldURI->PropertyName = 'SchoolsAttendedWith';
$request->Restriction->Excludes->ExtendedFieldURI->PropertyType = new EWSType_MapiPropertyTypeType();
$request->Restriction->Excludes->ExtendedFieldURI->PropertyType->_ = EWSType_MapiPropertyTypeType::INTEGER;

// We want only contacts that we did not go to high school with.
$request->Restriction->Excludes->Bitmask = new EWSType_ExcludesValueType();
$request->Restriction->Excludes->Bitmask->Value = SCHOOL_HIGH;
```

## Exists
Exists expressions search for items that have a certain property. For example,
you may only want contacts that have a custom property you created for their
favorite color. 

_**Note:** Exists expressions only check to see if the property is present, not
if the property is empty. It possible for a property to be both present and
empty and would be returned when using an expression of this type._

```php?start_inline=1
// Build a new exists expression.
$request->Restriction = new EWSType_RestrictionType();
$request->Restriction->Exists = new EWSType_ExistsType();

// Search for contacts with the favorite color property.
$request->Restriction->Exists->ExtendedFieldURI = new EWSType_PathToExtendedFieldType();
$request->Restriction->Exists->ExtendedFieldURI->DistinguishedPropertySetId = new EWSType_DistinguishedPropertySetIdType();
$request->Restriction->Exists->ExtendedFieldURI->DistinguishedPropertySetId->_ = EWSType_DistinguishedPropertySetIdType::PUBLIC_STRINGS;
$request->Restriction->Exists->ExtendedFieldURI->PropertyName = 'FavoriteColor';
$request->Restriction->Exists->ExtendedFieldURI->PropertyType = new EWSType_MapiPropertyTypeType();
$request->Restriction->Exists->ExtendedFieldURI->PropertyType->_ = EWSType_MapiPropertyTypeType::STRING;
```

## Is (Not) Equal To
The is equal to and is not equal to expressions can be used to compare a field
view to a constant value or another field. For is equal to expressions, the
value must be an exact match. For example, you may want to find contacts where
the given (first) name is the same as the surname (last name).

```php?start_inline=1
// Build a new is equal to expression.
$request->Restriction = new EWSType_RestrictionType();
$request->Restriction->IsEqualTo = new EWSType_IsEqualToType();

// Search on the contact's given name.
$request->Restriction->IsEqualTo->FieldURI = new EWSType_PathToUnindexedFieldType();
$request->Restriction->IsEqualTo->FieldURI->FieldURI = 'contacts:GivenName';

// Compare with the contact's surname.
$request->Restriction->IsEqualTo->FieldURIOrConstant = new EWSType_FieldURIOrConstantType();
$request->Restriction->IsEqualTo->FieldURIOrConstant->FieldURI = new EWSType_PathToUnindexedFieldType();
$request->Restriction->IsEqualTo->FieldURIOrConstant->FieldURI->FieldURI = 'contacts:Surname';
```

If you want to search for only emails with attachments. Please consider the
following codes.

```php?start_inline=1
$request->Restriction = new EWSType_RestrictionType();
$request->Restriction->IsEqualTo = new EWSType_IsEqualToType();
$request->Restriction->IsEqualTo->FieldURI = new EWSType_PathToUnindexedFieldType();
$request->Restriction->IsEqualTo->FieldURI->FieldURI = 'item:HasAttachments';
//Comparing with a constance
$request->Restriction->IsEqualTo->FieldURIOrConstant = new EWSType_FieldURIOrConstantType();
$request->Restriction->IsEqualTo->FieldURIOrConstant->Constant->Value = true;
```

For a complete list of available search options of FieldURI, please refer to
this
[documentation](https://msdn.microsoft.com/EN-US/library/aa494315(v=exchg.150).aspx)

If you wanted to find contacts where the given name does _not_ match their
surname, you would replace `$request->Restriction->IsEqualTo` with
`$request->Restriction->IsNotEqualTo` and `EWSType_IsEqualToType` with
`EWSType_IsNotEqualToType`.

## Is Greater Than (Or Equal To)
Is greater than and is greater than or equal to expressions can be used to
compare number values. For example, you may only want all contacts created after
a certain date and time.

```php?start_inline=1
// Build a new is greater than expression.
$request->Restriction = new EWSType_RestrictionType();
$request->Restriction->IsGreaterThan = new EWSType_IsGreaterThanType();

// Search on the contact's created date and time.
$request->Restriction->IsGreaterThan->FieldURI = new EWSType_PathToUnindexedFieldType();
$request->Restriction->IsGreaterThan->FieldURI->FieldURI = 'item:DateTimeCreated';

// We only want contacts created in the last week.
$date = new DateTime('1 week ago');
$request->Restriction->IsGreaterThan->FieldURIOrConstant = new EWSType_FieldURIOrConstantType();
$request->Restriction->IsGreaterThan->FieldURIOrConstant->Constant = new EWSType_ConstantValueType();
$request->Restriction->IsGreaterThan->FieldURIOrConstant->Constant->Value = $date->format('c');
```

If you wanted to use an is greater than or equal to expression you would replace
`$request->Restriction->IsGreaterThan` with
`$request->Restriction->IsGreaterThanOrEqualTo` and `EWSType_IsGreaterThanType`
with `EWSType_IsGreaterThanOrEqualToType`.

## Is Less Than (Or Equal To)
An is less than and is less than or equal to expression is similar to the is
greater than (or equal to) expression. For example, if you had a custom property
that you created to record a contact's years of driving experience you may only
want contacts with three or less years of driving experience.

```php?start_inline=1
// Build a new is less than or equal to expression.
$request->Restriction = new EWSType_RestrictionType();
$request->Restriction->IsLessThanOrEqualTo = new EWSType_IsLessThanOrEqualToType();

// Search on the custom years of driving experience field.
$request->Restriction->IsLessThanOrEqualTo->ExtendedFieldURI = new EWSType_PathToExtendedFieldType();
$request->Restriction->IsLessThanOrEqualTo->ExtendedFieldURI->DistinguishedPropertySetId = new EWSType_DistinguishedPropertySetIdType();
$request->Restriction->IsLessThanOrEqualTo->ExtendedFieldURI->DistinguishedPropertySetId->_ = EWSType_DistinguishedPropertySetIdType::PUBLIC_STRINGS;
$request->Restriction->IsLessThanOrEqualTo->ExtendedFieldURI->PropertyName = 'YearsDrivingExperience';
$request->Restriction->IsLessThanOrEqualTo->ExtendedFieldURI->PropertyType = new EWSType_MapiPropertyTypeType();
$request->Restriction->IsLessThanOrEqualTo->ExtendedFieldURI->PropertyType->_ = EWSType_MapiPropertyTypeType::INTEGER;

// We only want contacts with three or less years of experience.
$request->Restriction->IsLessThanOrEqualTo->FieldURIOrConstant = new EWSType_FieldURIOrConstantType();
$request->Restriction->IsLessThanOrEqualTo->FieldURIOrConstant->Constant = new EWSType_ConstantValueType();
$request->Restriction->IsLessThanOrEqualTo->FieldURIOrConstant->Constant->Value = 2;
```

Just like the greater than expressions, you can replace
`$request->Restriction->IsLessThanOrEqualTo` with
`$request->Restriction->IsLessThan` and `EWSType_IsLessThanOrEqualToType` with
`EWSType_IsLessThan` to use a less than expression.
