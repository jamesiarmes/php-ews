<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\DelegateUserResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * contains the response message for a single delegate user.
 *
 * @package php-ews\Types
 */
class DelegateUserResponseMessageType extends ResponseMessageType
{
    /**
     * Identifies a single delegate that is returned in a delegate management
     * response.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\DelegateUserType
     */
    public $DelegateUser;
}
