<?php
/**
 * Definition of the MimeContentType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the MimeContentType type
 */
class MimeContentType extends EWSType
{
    /**
     * A text value that represents a base64Binary MIME stream.
     *
     * @var string
     */
    public $_;

    /**
     * The International Standards Organization (ISO) name of the character set
     * used in the MIME message.
     *
     * @var string
     */
    public $CharacterSet;
}
