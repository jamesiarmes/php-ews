<?php
/**
 * Contains ArrayOfValueAttributionsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of attributions for an associated Value element.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfValueAttributionsType extends EWSType
{
    /**
     * Specifies a string used to identify an attribute.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Attribution;
}
