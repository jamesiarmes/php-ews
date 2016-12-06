<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SearchFolderType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a search folder that is contained in a mailbox.
 *
 * @package php-ews\Type
 */
class SearchFolderType extends FolderType
{
    /**
     * Contains the parameters that define a search folder.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SearchParametersType
     */
    public $SearchParameters;
}
