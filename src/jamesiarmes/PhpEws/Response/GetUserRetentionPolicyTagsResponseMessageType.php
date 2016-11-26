<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetUserRetentionPolicyTagsResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Defines the response to a GetRetentionPolicyTags request.
 *
 * @package php-ews\Response
 */
class GetUserRetentionPolicyTagsResponseMessageType extends ResponseMessageType
{
    /**
     * Contains a list of retention tags.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRetentionPolicyTagsType
     */
    public $RetentionPolicyTags;
}
