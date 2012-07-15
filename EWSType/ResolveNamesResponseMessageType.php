<?php
/**
 * Definition of the ResolveNamesResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ResolveNamesResponseMessageType type
 */
class EWSType_ResolveNamesResponseMessageType extends EWSType
{
    /**
     * ResolutionSet property
     *
     * @var EWSType_ArrayOfResolutionType
     */
    public $ResolutionSet;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ResolutionSet',
                'required' => false,
                'type' => 'ArrayOfResolutionType',
            ),
        );
    }
}
