<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a URI type in the CloudEvents specification.
 */
class URIType extends AbstractType
{
    
    public function __construct()
    {
        parent::__construct(
            self::URI,
            'String expression conforming to URI-reference as defined in RFC 3986 §4.1.'
        );
    }
}
