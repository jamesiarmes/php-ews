<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Default shape names for response shapes
 */
class DefaultShapeNamesType extends DataType
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
