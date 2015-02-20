<?php
/**
 * Contains AcceptSharingInvitationType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Used to accept an invitation that allows access to another user’s calendar or
 * contacts data.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ReferenceItemResponseType.
 */
class AcceptSharingInvitationType extends EWSType
{
    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2010
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;
}
