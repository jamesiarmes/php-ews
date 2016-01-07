<?php
/**
 * Contains EWSType_ImportanceChoicesType.
 */

/**
 * Describes the importance of an item or the aggregated importance of all items
 * in a conversation in the current folder.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ImportanceChoicesType extends EWSType
{
    /**
     * High importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const HIGH = 'High';

    /**
     * Low importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const LOW = 'Low';

    /**
     * Normal importance level.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NORMAL = 'Normal';

    /**
     * Element value.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
