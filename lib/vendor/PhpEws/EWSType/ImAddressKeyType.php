<?php
/**
 * Definition of the ImAddressKeyType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Instant messenger address key type
 */
class EWSType_ImAddressKeyType extends EWSType
{
    /**
     * Instant messenger ket for instant messenger address one.
     *
     * @var string
     */
    const IM_ADDRESS_1 = 'ImAddress1';

    /**
     * Instant messenger ket for instant messenger address two.
     *
     * @var string
     */
    const IM_ADDRESS_2 = 'ImAddress2';

    /**
     * Instant messenger ket for instant messenger address three.
     *
     * @var string
     */
    const IM_ADDRESS_3 = 'ImAddress3';

    /**
     * Value of the desired mapping. Should be one of the constants from the
     * EWSType_ImAddressKeyType class.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
