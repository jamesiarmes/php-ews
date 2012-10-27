<?php
/**
 * Contains EWSType_BodyTypeResponseType.
 */

/**
 * Defines how the body text is formatted in the response.
 *
 * @package php-ews\Enumerations
 */
class EWSType_BodyTypeResponseType extends EWSType
{
    /**
     * The response will return the richest available content of body text.
     *
     * This is useful if it is unknown whether the content is text or HTML. The
     * returned body will be text if the stored body is plain text. Otherwise,
     * the response will return HTML if the stored body is in either HTML or RTF
     * format.
     *
     * This is the default value.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const BEST = 'Best';

    /**
     * The response will return an item body as HTML.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HTML = 'HTML';

    /**
     * The response will return an item body as plain text.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const TEXT = 'Text';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
