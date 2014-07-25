<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Default shape names for response shapes
 */
class BodyTypeResponseType extends DataType
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
