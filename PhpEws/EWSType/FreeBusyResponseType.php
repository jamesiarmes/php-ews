<?php
/**
 * Definition of the FreeBusyResponseType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the FreeBusyResponseType type
 */
class FreeBusyResponseType extends PhpEws\EWSType
{
    /**
     * ResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * FreeBusyView property
     *
     * @var FreeBusyView
     */
    public $FreeBusyView;
}
