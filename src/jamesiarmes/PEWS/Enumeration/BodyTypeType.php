<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\BodyTypeType.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Specifies the type of an item body.
 *
 * @package php-ews\Enumeration
 */
class BodyTypeType extends Enumeration
{
    /**
     * Indicates that the body is in HTML.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * Indicates that the body is in text.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TEXT = 'Text';
}
