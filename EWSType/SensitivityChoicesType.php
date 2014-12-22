<?php
/**
 * Contains EWSType_SensitivityChoicesType.
 */

/**
 * Indicates the sensitivity level of an item.
 *
 * @package php-ews\Enumerations
 */
class EWSType_SensitivityChoicesType extends EWSType
{
    /**
     * Indicates that the item is confidential.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const CONFIDENTIAL = 'Confidential';

    /**
     * Indicates that the item has a normal sensitivity.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Indicates that the item is personal.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PERSONAL = 'Personal';

    /**
     * Indicates that the item is private.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const PRIVATE_ITEM = 'Private';

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
