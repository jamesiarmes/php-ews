<?php
/**
 * Definition of the ItemResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ItemResponseShapeType type
 */
class EWSType_ItemResponseShapeType extends EWSType
{
    /**
     * BaseShape property
     *
     * @var EWSType_DefaultShapeNamesType
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
     * @var EWSType_BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;
}
