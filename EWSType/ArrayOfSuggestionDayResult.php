<?php
/**
 * Definition of the ArrayOfSuggestionDayResult type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ArrayOfSuggestionDayResult type
 */
class EWSType_ArrayOfSuggestionDayResult extends EWSType
{
    /**
     * SuggestionDayResult property
     *
     * @var EWSType_SuggestionDayResult
     */
    public $SuggestionDayResult;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SuggestionDayResult',
                'required' => false,
                'type' => 'SuggestionDayResult',
            ),
        );
    }
}
