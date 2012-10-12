<?php
/**
 * Definition of the PostReplyItemBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PostReplyItemBaseType type
 */
class EWSType_PostReplyItemBaseType extends EWSType
{
    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Body property
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * ReferenceItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * ObjectName property
     *
     * @var string
     */
    public $ObjectName;
}
