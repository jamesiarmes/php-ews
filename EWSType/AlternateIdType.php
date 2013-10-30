<?php
/**
 * Contains EWSType_AlternateIdType.
 */

/**
 * Describes an identifier to convert in a request and the results of a
 * converted identifier in the response.
 *
 * @package php-ews\Types
 */
class EWSType_AlternateIdType extends EWSType
{
    /**
     * Describes the source format in a ConvertId Operation request and
     * describes the destination format in a ConvertId Operation response.
     *
     * The destination format is described by the DestinationFormat attribute of
     * the ConvertId element in the request.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_IdFormatType
     */
    public $Format;

    /**
     * Describes the source identifier in a ConvertId Operation request and
     * describes the destination identifier in a ConvertId Operation response.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $Id;

    /**
     * Indicates whether the identifier represents an archived item or folder.
     *
     * A value of true indicates that the identifier represents an archived item
     * or folder. This attribute is optional.
     *
     * @since Exchange 2010 SP1
     *
     * @var boolean
     */
    public $IsArchive;

    /**
     * Describes the mailbox primary Simple Mail Transfer Protocol (SMTP)
     * address that contains the identifiers to translate.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $Mailbox;
}
