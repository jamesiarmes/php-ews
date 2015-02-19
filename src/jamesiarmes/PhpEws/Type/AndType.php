<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AndType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a search expression that allows you to perform a Boolean AND
 * operation between two or more search expressions.
 *
 * The result of the AND operation is true if all the search expressions
 * contained within the And element are true.
 *
 * @package php-ews\Type
 */
class AndType extends MultipleOperandBooleanExpressionType
{

}
