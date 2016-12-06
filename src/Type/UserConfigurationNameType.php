<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UserConfigurationNameType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the name of a user configuration object. The user configuration
 * object name is the identifier for a user configuration object.
 *
 * @package php-ews\Type
 */
class UserConfigurationNameType extends TargetFolderIdType
{
    /**
     * The name of a user configuration object.
     *
     * This attribute is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;
}
