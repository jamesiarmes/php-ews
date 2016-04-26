<?php
/**
 * Contains \jamesiarmes\PEWS\API\Enumeration\Scope.
 */

namespace jamesiarmes\PEWS\API\Enumeration;

use \jamesiarmes\PEWS\API\Enumeration;

/**
 * Defines the scope of a message tracking report.
 *
 * @package php-ews\Enumeration
 */
class Scope extends Enumeration
{
    /**
     * The message tracking scopes spans across a forest.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const FOREST = 'Forest';

    /**
     * The message tracking scopes spans across an organization.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const ORGANIZATION = 'Organization';

    /**
     * The message tracking scopes spans across a site.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const SITE = 'Site';
}
