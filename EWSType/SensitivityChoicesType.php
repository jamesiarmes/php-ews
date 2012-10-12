<?php
/**
 * Definition of the SensitivityChoicesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the SensitivityChoicesType type
 */
class EWSType_SensitivityChoicesType extends EWSType
{
    /**
     * Sensitivity level of the item
     *
     * @var string
     */
    public $_;

    /**
     * Indiciates theat the item is confidential.
     *
     * @var string
     */
    const CONFIDENTIAL = 'Confidential';

    /**
     * Indiciates theat the item has a normal sensativity.
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Indiciates theat the item is personal.
     *
     * @var string
     */
    const PERSONAL = 'Personal';

    /**
     * Indiciates theat the item is private.
     *
     * @var string
     */
    const PRIVATE_ITEM = 'Private';

    /**
     * Converts the object to a string.
     *
     * @return string The string representation of the current object.
     */
    public function __toString()
    {
        return $this->_;
    }
}
