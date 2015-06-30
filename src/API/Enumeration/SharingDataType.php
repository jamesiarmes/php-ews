<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\SharingDataType.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Describes the type of data that is shared by a shared folder.
 *
 * @package php-ews\Enumeration
 */
class SharingDataType extends Enumeration
{
    /**
     * Indicates that the shared folder contains calendar information.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CALENDAR = 'Calendar';

    /**
     * Indicates that the shared folder contains contact information.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const CONTACTS = 'Contacts';
}
