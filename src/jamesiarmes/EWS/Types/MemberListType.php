<?php
/**
 * Contains MemberListType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the list of members for a distribution list.
 *
 * @package jamesiarmes\EWS\Types
 */
class MemberListType extends EWSType
{
    /**
     * Provides an identifier for a fully resolved e-mail address, and the
     * status of that address on the server.
     *
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var MemberType
     */
    public $Member;
}
