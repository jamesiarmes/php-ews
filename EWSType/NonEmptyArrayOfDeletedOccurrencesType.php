<?php
/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 */
class EWSType_NonEmptyArrayOfDeletedOccurrencesType extends EWSType
{
    /**
     * DeletedOccurrence property
     *
     * @var EWSType_DeletedOccurrenceInfoType
     */
    public $DeletedOccurrence;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DeletedOccurrence',
                'required' => false,
                'type' => 'DeletedOccurrenceInfoType',
            ),
        );
    }
}
