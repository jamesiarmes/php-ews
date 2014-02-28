<?php
/**
 * Definition of the ItemResponseShapeType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;

/**
 * Definition of the ItemResponseShapeType type
 */
class ItemResponseShapeType extends PhpEws\EWSType
{
    /**
     * BaseShape property
     *
     * @var DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * IncludeMimeContent property
     *
     * @var boolean
     */
    public $IncludeMimeContent;

    /**
     * BodyType property
     *
     * @var BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * @var NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
