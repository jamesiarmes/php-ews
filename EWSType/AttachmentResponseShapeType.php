<?php
/**
 * Definition of the AttachmentResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AttachmentResponseShapeType type
 */
class EWSType_AttachmentResponseShapeType extends EWSType
{
    /**
     * IncludeMimeContent property
     *
     * @var boolean
     */
    public $IncludeMimeContent;

    /**
     * BodyType property
     *
     * @var EWSType_BodyTypeResponseType
     */
    public $BodyType;

    /**
     * AdditionalProperties property
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'IncludeMimeContent',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'BodyType',
                'required' => false,
                'type' => 'BodyTypeResponseType',
            ),
            array(
                'name' => 'AdditionalProperties',
                'required' => false,
                'type' => 'NonEmptyArrayOfPathsToElementType',
            ),
        );
    }
}
