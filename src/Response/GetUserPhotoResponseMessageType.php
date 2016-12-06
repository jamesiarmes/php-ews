<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetUserPhotoResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a GetUserPhoto request.
 *
 * @package php-ews\Response
 */
class GetUserPhotoResponseMessageType extends ResponseMessageType
{
    /**
     * Indicates whether a user’s photo has changed.
     *
     * @since Exchange 2013
     *
     * @var boolean
     */
    public $HasChanged;

    /**
     * Contains the stream of picture data.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Create a base64 class?
     */
    public $PictureData;
}
