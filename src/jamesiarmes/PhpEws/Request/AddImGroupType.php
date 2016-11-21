<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\AddImGroupType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to add a new instant messaging group.
 *
 * @package php-ews\Request
 */
class AddImGroupType extends BaseRequestType
{
    /**
     * Display name of the instant messaging group.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayName;
}
