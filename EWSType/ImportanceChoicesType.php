<?php
/**
 * Definition of the ImportanceChoicesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ImportanceChoicesType type
 */
class EWSType_ImportanceChoicesType extends EWSType
{
    /**
     * Importance level of the item.
     *
     * @var string
     */
    public $_;

    /**
     * High importance level.
     *
     * @var string
     */
    const HIGH = 'High';

    /**
     * Low importance level.
     *
     * @var string
     */
    const LOW = 'Low';

    /**
     * Normal importance level.
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Converts the object to a string.
     *
     * @return string The string representation of the current object.
     */
    public function __toString()
    {
        return $this->_;
    }
}
