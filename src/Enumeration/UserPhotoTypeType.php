<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\UserPhotoTypeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of a user photo.
 *
 * @package php-ews\Enumeration
 */
class UserPhotoTypeType extends Enumeration
{
    /**
     * Identifies a user photo as a profile header photo.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    const PROFILE_HEADER_PHOTO = 'ProfileHeaderPhoto';

    /**
     * Identifies a user photo as the user's primary photo.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    const USER_PHOTO = 'UserPhoto';
}
