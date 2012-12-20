<?php
/**
 * Definition of the DefaultShapeNamesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Default shape names for response shapes
 */
class EWSType_DefaultShapeNamesType extends EWSType
{
    /**
     * All properties are retured in the response
     *
     * @var string
     */
    const ALL_PROPERTIES = 'AllProperties';

    /**
     * Default properties are returned in the respoonse
     *
     * @var string
     */
    const DEFAULT_PROPERTIES = 'Default';

    /**
     * Only folder ids are returned in the response
     *
     * @var string
     */
    const ID_ONLY = 'IdOnly';
}
