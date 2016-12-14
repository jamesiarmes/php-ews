#!/usr/bin/env php
<?php
/**
 * Builds the SOAP classmap.
 */

// Define source code paths.
$base_path = dirname(__DIR__);
$src_path = "$base_path/src";

require_once "$base_path/vendor/autoload.php";

// Defines overrides for any files that had to be renamed to avoid reserved
// words.
$overrides = array(
    'Type\\\StringType' => 'String',
);

// Iterate over the different type namespaces, building out the mapping for
// each.
$map = array();
foreach (array('ArrayType', 'Request', 'Response', 'Type') as $namespace) {
    $i = count($map);
    $map[$i] = array('namespace' => $namespace, 'map' => array());

    // Iterate over the files for this namespace, adding each to the map.
    foreach (new DirectoryIterator("$src_path/$namespace") as $file) {
        if ($file->isDot()) {
            continue;
        }

        // If there is an override for this class, rename the base name to
        // match.
        $classname = $basename = basename($file, '.php');
        if (isset($overrides["$namespace\\\\$basename"]))  {
            $basename = $overrides["$namespace\\\\$basename"];
        }

        $map[$i]['map'][] = array(
            'type' => $basename,
            'class' => "\\\\jamesiarmes\\\\PhpEws\\\\$namespace\\\\$classname",
        );
    }
}

// Prepare the updated timestamp.
$updated = new DateTime();
$updated->setTimezone(new DateTimeZone('UTC'));

// Load and render the template.
$engine = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($base_path . '/templates')
));
$template = $engine->loadTemplate('ClassMap');
file_put_contents(
    "$src_path/ClassMap.php",
    $template->render(array(
        'maps' => $map,
        'updated' => $updated->format('Y-m-d H:i:s e'),
    ))
);

fwrite(STDOUT, "Class map written to \"$src_path/ClassMap.php\".\n");
