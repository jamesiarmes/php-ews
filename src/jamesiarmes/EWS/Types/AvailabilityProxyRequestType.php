<?php
/**
 * Contains AvailabilityProxyRequestType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines whether a proxy request is a cross-site or a cross-forest request.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class AvailabilityProxyRequestType extends EWSType
{
    /**
     * Indicates that this request is cross-forest.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CROSS_FOREST = 'CrossForest';

    /**
     * Indicates that this request is cross-site.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CROSS_SITE = 'CrossSite';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
