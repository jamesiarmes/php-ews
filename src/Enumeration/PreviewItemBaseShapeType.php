<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\PreviewItemBaseShapeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of preview to be returned for an item.
 *
 * @package php-ews\Enumeration
 */
class PreviewItemBaseShapeType extends Enumeration
{
    /**
     * Indicates that only selected properties are shown.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const COMPACT = 'Compact';

    /**
     * Indicates that all properties are shown.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DEFAULT_SHAPE = 'Default';
}
