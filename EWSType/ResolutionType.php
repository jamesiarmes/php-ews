<?php
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ResolutionType type
 */
class EWSType_ResolutionType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Mailbox',
                'required' => false,
                'type' => 'EmailAddressType',
            ),
            array(
                'name' => 'Contact',
                'required' => false,
                'type' => 'ContactItemType',
            ),
        );
    }
}
