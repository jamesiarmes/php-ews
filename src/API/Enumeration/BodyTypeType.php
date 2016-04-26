<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\BodyTypeType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

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
