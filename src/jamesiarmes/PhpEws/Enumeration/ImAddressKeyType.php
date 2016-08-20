<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ImAddressKeyType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Represents the key for an instant messenger address.
 *
 * @package php-ews\Enumeration
 */
class ImAddressKeyType extends Enumeration
{
    /**
     * Instant messenger key for instant messenger address one.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IM_ADDRESS_1 = 'ImAddress1';

    /**
     * Instant messenger key for instant messenger address two.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IM_ADDRESS_2 = 'ImAddress2';

    /**
     * Instant messenger key for instant messenger address three.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IM_ADDRESS_3 = 'ImAddress3';
}
