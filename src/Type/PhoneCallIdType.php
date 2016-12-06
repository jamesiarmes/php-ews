<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PhoneCallIdType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the identifier of a phone call.
 *
 * @package php-ews\Type
 */
class PhoneCallIdType extends Type
{
    /**
     * Identifies the phone call to disconnect.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Id;
}
