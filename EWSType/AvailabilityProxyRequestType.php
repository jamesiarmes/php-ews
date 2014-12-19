<?php
/**
 * Contains EWSType_AvailabilityProxyRequestType.
 */

/**
 * Defines whether a proxy request is a cross-site or a cross-forest request.
 *
 * @package php-ews\Enumerations
 */
class EWSType_AvailabilityProxyRequestType extends EWSType
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
