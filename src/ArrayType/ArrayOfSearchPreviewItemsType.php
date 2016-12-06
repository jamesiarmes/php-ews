<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfSearchPreviewItemsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Defines a list of items available for preview.
 *
 * @package php-ews\Array
 */
class ArrayOfSearchPreviewItemsType extends ArrayType
{
    /**
     * Specifies an item preview for a discovery search.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\SearchPreviewItemType[]
     */
    public $SearchPreviewItem = array();
}
