<?php
/**
 * Contains EWSType_SyncFolderItemsScopeType.
 */

/**
 * Defines whether just items or items and folder associated information are
 * returned in a synchronization response.
 *
 * @package php-ews\Enumerations
 */
class EWSType_SyncFolderItemsScopeType extends EWSType
{
    /**
     * Specifies that only items in the folder are returned in a synchronization
     * response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NORMAL = 'NormalItems';

    /**
     * Specifies that both items in the folder and folder associated information
     * are returned in a synchronization response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NORMAL_AND_ASSOCIATED = 'NormalAndAssociatedItems';

    /**
     * Element value.
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
