<?php
/**
 * Contains EWSType_FolderQueryTraversalType.
 */

/**
 * Defines how a FindFolder search is performed.
 *
 * @package php-ews\Enumerations
 */
class EWSType_FolderQueryTraversalType extends EWSType
{
    /**
     * Consider both direct children as well as all subfolders contained within
     * those children as well as the children's children, etc.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DEEP = 'Deep';

    /**
     * Consider only folders that are direct children of the parent folder(s) in
     * question.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SHALLOW = 'Shallow';

    /**
     * Consider only those items that are soft deleted from the parent folders
     * specified.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SOFT_DELETED = 'SoftDeleted';

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
