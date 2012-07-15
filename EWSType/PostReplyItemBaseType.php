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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Subject',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Body',
                'required' => false,
                'type' => 'BodyType',
            ),
            array(
                'name' => 'ReferenceItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
            array(
                'name' => 'ObjectName',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
