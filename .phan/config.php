<?php
/**
 * This configuration will be read and overlaid on top of the
 * default configuration. Command line arguments will be applied
 * after this file is read.
 */
return [
    'analyzed_file_extensions' => ['php'],
    'directory_list' => ['examples', 'src', 'script', 'vendor'],
    'exclude_analysis_directory_list' => ['vendor'],
];
