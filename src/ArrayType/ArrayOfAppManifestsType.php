<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfAppManifestsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a collection of base64-encoded app manifests that are installed for a
 * email account.
 *
 * @package php-ews\Array
 */
class ArrayOfAppManifestsType extends ArrayType
{
    /**
     * Contains the base64-encoded app manifest file.
     *
     * @since Exchange 2013 SP1
     *
     * @var string[]
     *
     * @todo Create a base64 class?
     */
    public $Manifest = array();
}
