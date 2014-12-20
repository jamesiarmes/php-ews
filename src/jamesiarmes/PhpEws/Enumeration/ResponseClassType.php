<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ResponseClassType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the status of a response.
 *
 * @package php-ews\Enumeration
 */
class ResponseClassType extends Enumeration
{
    /**
     * Describes a request that cannot be fulfilled.
     *
     * The following are examples of sources of errors:
     * - Invalid attributes or elements
     * - Attributes or elements that are out of range
     * - An unknown tag
     * - An attribute or element that is not valid in the context
     * - An unauthorized access attempt by any client
     * - A server-side failure in response to a valid client-side call
     * - Information about the error can be found in the ResponseCode and
     *   MessageText elements.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ERROR = 'Error';

    /**
     * Describes a request that is fulfilled.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SUCCESS = 'Success';

    /**
     * Describes a request that was not processed.
     *
     * A warning may be returned if an error occurred while an item in the
     * request was processing and subsequent items could not be processed. The
     * following are examples of sources of warnings:
     * - The Exchange store is offline during the batch.
     * - Active Directory Domain Services (AD DS) is offline.
     * - Mailboxes were moved.
     * - The message database (MDB) is offline.
     * - A password is expired.
     * - A quota has been exceeded.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WARNING = 'Warning';
}
