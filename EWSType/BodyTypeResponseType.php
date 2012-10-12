<?php
/**
 * Definition of the BodyTypeResponseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Default shape names for response shapes
 */
class EWSType_BodyTypeResponseType extends EWSType
{
    /**
     * All properties are retured in the response
     *
     * @var string
     */
    const BEST = 'Best';

    /**
     * Default properties are returned in the respoonse
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * Plain text body
     *
     * @var string
     */
    const TEXT = 'Text';
}
