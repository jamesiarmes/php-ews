<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\UserPhotoSizeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the size of a user's photo being requested.
 *
 * @package php-ews\Enumeration
 */
class UserPhotoSizeType extends Enumeration
{
    /**
     * The image is 48 pixels high and 48 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR48X48 = 'HR48x48';

    /**
     * The image is 64 pixels high and 64 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR64X64 = 'HR64x64';

    /**
     * The image is 96 pixels high and 96 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR96X96 = 'HR96x96';

    /**
     * The image is 120 pixels high and 120 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR120X120 = 'HR120x120';

    /**
     * The image is 240 pixels high and 240 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR240X240 = 'HR240x240';

    /**
     * The image is 360 pixels high and 360 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR360X360 = 'HR360x360';

    /**
     * The image is 432 pixels high and 432 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR432X432 = 'HR432x432';

    /**
     * The image is 504 pixels high and 504 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR504X504 = 'HR504x504';

    /**
     * The image is 648 pixels high and 648 pixels wide.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const HR648X648 = 'HR648x648';

    /**
     * The image is 1024 pixels high and 1024 pixels wide.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    const HR1024XN = 'HR1024xN';

    /**
     * The image is 1920 pixels high and 1920 pixels wide.
     *
     * @since Exchange 2016
     *
     * @var string
     */
    const HR1920XN = 'HR1920xN';
}
