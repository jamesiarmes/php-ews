<?php
/**
 * Definition of the ArrayOfSuggestion type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfSuggestion type
 */
class EWSType_ArrayOfSuggestion extends EWSType
{
    /**
     * Suggestion property
     *
     * @var EWSType_Suggestion
     */
    public $Suggestion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Suggestion',
                'required' => false,
                'type' => 'Suggestion',
            ),
        );
    }
}
