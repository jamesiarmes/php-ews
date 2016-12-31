---
title:  "Calendar: Get Event Colors"
date:   2015-06-24
updated: 2015-06-24
category: 0.1
tags: calendar
---
Retrieving calendar events that have a category assigned returns only the
category name. To get the color associated with that category, you have to
retrieve the master category list using the GetUserConfiguraton request. The
returned category list contains the color number associated with that category.
It ranges from -1 (no color) to 24. The actual RGB color associated with that
color number can be found here:
<https://msdn.microsoft.com/en-us/library/ee203806(v=exchg.80).aspx>. I included
the RGB values from that site in this code. This code is a sample of how to
retrieve the category colors. At the end, the $category array keys have been
updated with the category name. The text key is just what I am using to assign
the color for the text so that it shows up using the background key.

```php?start_inline=1
ini_set('display_errors', 'On');
error_reporting(E_ALL);


require_once('./php-ews/ExchangeWebServices.php');
require_once('./php-ews/NTLMSoapClient.php');
require_once('./php-ews/NTLMSoapClient/Exchange.php');
require_once('./php-ews/EWS_Exception.php');
require_once('./php-ews/EWSType.php');

function __autoload($class_name) {
    // Start from the base path and determine the location from the class name,
        $base_path = './php-ews';
        $include_file = $base_path . '/' . str_replace('_', '/', $class_name) . '.php';
        return (file_exists($include_file) ? require_once $include_file : false);
        }
        
$category = array(
   -1 => array('background'=>'rgb(255,255,255)', 'text'=>'black'),   // No color
    0 => array('background'=>'rgb(214,37,46)',   'text'=>'black'),   // Red
    1 => array('background'=>'rgb(240,108,21)',  'text'=>'black'),   // Orange
    2 => array('background'=>'rgb(255,202,76)',  'text'=>'black'),   // Peach
    3 => array('background'=>'rgb(255,254,61)',  'text'=>'black'),   // Yellow
    4 => array('background'=>'rgb(74,182,63)',   'text'=>'black'),   // Green
    5 => array('background'=>'rgb(64,189,149)',  'text'=>'black'),   // Teal
    6 => array('background'=>'rgb(133,154,82)',  'text'=>'black'),   // Olive
    7 => array('background'=>'rgb(50,103,184)',  'text'=>'black'),   // Blue
    8 => array('background'=>'rgb(97,61,180)',   'text'=>'black'),   // Purple
    9 => array('background'=>'rgb(163,78,120)',  'text'=>'black'),   // Maroon
   10 => array('background'=>'rgb(196,204,221)', 'text'=>'black'),   // Steel 
   11 => array('background'=>'rgb(140,156,189)', 'text'=>'black'),   // Dark steel
   12 => array('background'=>'rgb(196,196,196)', 'text'=>'black'),   // Gray
   13 => array('background'=>'rgb(165,165,165)', 'text'=>'black'),   // Dark gray
   14 => array('background'=>'rgb(28,28,28)',    'text'=>'white'),   // Black
   15 => array('background'=>'rgb(175,30,37)',   'text'=>'white'),   // Dark red
   16 => array('background'=>'rgb(177,79,13)',   'text'=>'white'),   // Dark orange
   17 => array('background'=>'rgb(171,123,5)',   'text'=>'white'),   // Dark peach
   18 => array('background'=>'rgb(153,148,0)',   'text'=>'black'),   // Dark yellow
   19 => array('background'=>'rgb(53,121,43)',   'text'=>'black'),   // Dark green
   20 => array('background'=>'rgb(46,125,100)',  'text'=>'black'),   // Dark teal
   21 => array('background'=>'rgb(95,108,58)',   'text'=>'black'),   // Dark olive
   22 => array('background'=>'rgb(42,81,145)',   'text'=>'white'),   // Dark blue
   23 => array('background'=>'rgb(80,50,143)',   'text'=>'white'),   // Dark purple
   24 => array('background'=>'rgb(130,55,95)',   'text'=>'white')    // dark maroon
);


$server = 'outlook.office365.com';
$username = 'user@whereever.com';
$password = 'mypassword';
$version  = ExchangeWebServices::VERSION_2010_SP2;
$EmailAddy = "sharedmailbox@whereever.com";    

$ews = new ExchangeWebServices($server, $username, $password, $version);

$request = new EWSType_GetUserConfigurationType();
$request->UserConfigurationName = new EWSType_UserConfigurationNameType();
$request->UserConfigurationName->Name = "CategoryList";
$request->UserConfigurationName->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->UserConfigurationName->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;
$mailBox = new EWSType_EmailAddressType();
$mailBox->EmailAddress = $EmailAddy;
$request->UserConfigurationName->DistinguishedFolderId->Mailbox = $mailBox;
$request->UserConfigurationProperties = EWSType_UserConfigurationPropertyType::ALL;
$response = $ews->GetUserConfiguration($request);
libxml_use_internal_errors(true);
$xmlObject = simplexml_load_string($response->ResponseMessages->GetUserConfigurationResponseMessage->UserConfiguration->XmlData);

foreach ($xmlObject->children() as $node) {
    $arr = $node->attributes(); 
    $newKey = (string)$arr["name"];
    $oldKey = (string)$arr["color"];
    $category[$newKey] = $category[$oldKey];
    unset($category[$oldKey]);
}

print_r($category);
```
