<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ClientAccessTokenTypeType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the type of a client access token.
 *
 * @package php-ews\Enumeration
 */
class ClientAccessTokenTypeType extends Enumeration
{
    /**
     * A caller identity client access token.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALLER_IDENTITY = 'CallerIdentity';

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    const CONNECTORS = 'Connectors';

    /**
     * An extension callback client access token.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const EXTENSION_CALLBACK = 'ExtensionCallback';

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    const EXTENSION_REST_API_CALLBACK = 'ExtensionRestApiCallback';

    /**
     * Undocumented.
     *
     * @since Exchange 2016
     *
     * @var string
     *
     * @todo Update once documentation exists.
     */
    const LOKI = 'Loki';

    /**
     * Indicates that the client access token is a scoped token.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SCOPED_TOKEN = 'ScopedToken';
}
