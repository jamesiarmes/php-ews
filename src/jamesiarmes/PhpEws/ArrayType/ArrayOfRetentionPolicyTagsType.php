<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRetentionPolicyTagsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of retention tags.
 *
 * @package php-ews\Array
 */
class ArrayOfRetentionPolicyTagsType extends ArrayType
{
    /**
     * Specifies the retention policy for a mailbox item.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\RetentionPolicyTagType[]
     */
    public $RetentionPolicyTag = array();
}
