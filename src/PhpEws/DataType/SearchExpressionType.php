<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * The SearchExpression element is an abstract element that represents the
 * substituted element within a restriction. All search expressions derive from
 * this base type. This element is not used in an XML instance document.
 */
abstract class SearchExpressionType extends DataType
{
    /**
     * Identifies frequently referenced properties by URI.
     *
     * @var PathToUnindexedFieldType
     */
    public $FieldURI;

    /**
     * Identifies individual members of a dictionary.
     *
     * @var PathToIndexedFieldType
     */
    public $IndexedFieldURI;

    /**
     * Identifies MAPI properties.
     *
     * @var PathToExtendedFieldType
     */
    public $ExtendedFieldURI;
}
