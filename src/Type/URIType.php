<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a URI type in the CloudEvents specification.
 *
 * @api
 */
class URIType extends Type
{
    
    /**
     * @var self
     */
    private static $instance;
    
    protected function __construct()
    {
        parent::__construct(
            self::URI,
            'String expression conforming to URI-reference as defined in RFC 3986 §4.1.'
        );
    }
    
    /**
     * @return self
     */
    public static function create() : self
    {
        return self::$instance = self::$instance ?? new self();
    }
}
