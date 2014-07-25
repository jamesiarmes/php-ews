<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the FreeBusyResponseType type
 */
class FreeBusyResponseType extends DataType
{
    /**
     * ResponseMessage property
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * FreeBusyView property
     *
     * @var EWSType_FreeBusyView
     */
    public $FreeBusyView;
}
