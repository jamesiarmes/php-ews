<?php
/**
 * The SearchExpression element is an abstract element that represents the
 * substituted element within a restriction. All search expressions derive from
 * this base type. This element is not used in an XML instance document.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SearchExpressionType type.
 */
abstract class EWSType_SearchExpressionType extends EWSType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var EWSType_PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var EWSType_PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var EWSType_PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
}
