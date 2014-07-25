<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MimeContentType type
 */
class MimeContentType extends DataType
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
