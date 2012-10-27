<?php
/**
 * Contains EWSType_BodyType.
 */

/**
 * Specifies the body of an item.
 *
 * @package php-ews\Types
 */
class EWSType_BodyType extends EWSType
{
    /**
     * The body of the Exchange Web Services item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Specifies the type of the body.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BodyTypeType
     */
    public $BodyType;

    /**
     * Boolean value that indicates whether the body is truncated.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsTruncated;
}
