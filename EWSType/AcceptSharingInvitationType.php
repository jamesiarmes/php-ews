<?php
/**
 * Used to accept an invitation that allows access to another user’s calendar or
 * contacts data.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AcceptSharingInvitationType type.
 */
class EWSType_AcceptSharingInvitationType extends EWSType
{
    /**
     * Identifies the item to which the response object refers.
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;
}
