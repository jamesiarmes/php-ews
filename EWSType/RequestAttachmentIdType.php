<?php
/**
 * Definition of the RequestAttachmentIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RequestAttachmentIdType type
 */
class EWSType_RequestAttachmentIdType extends EWSType
{
    /**
     * Id property
     *
     * @var string
     */
    public $Id;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Id',
                'required' => false,
                'type' => 'string',
            ),
        );
    }
}
