<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\TaskDelegateStateType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Represents the status of a delegated task.
 *
 * @package php-ews\Enumeration
 */
class TaskDelegateStateType extends Enumeration
{
    /**
     * Indicates that the delegate has accepted the task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ACCEPTED = 'Accepted';

    /**
     * Indicates that the delegate has declined the task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DECLINED = 'Declined';

    /**
     * Indicates that the task request is out of bounds.
     *
     * This is an internal Outlook value and should not be used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const MAX = 'Max';

    /**
     * Indicates that the task is not delegated or the task request has been
     * created but not sent.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NO_MATCH = 'NoMatch';

    /**
     * Indicates that the task is a new task request that has been sent, but the
     * delegate has not yet responded.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OWN_NEW = 'OwnNew';

    /**
     * Indicates that the task is owned.
     *
     * This value should not be used.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OWNED = 'Owned';
}
