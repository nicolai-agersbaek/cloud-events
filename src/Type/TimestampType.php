<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a Timestamp type in the CloudEvents specification.
 *
 * @api
 */
class TimestampType extends Type
{
    
    /**
     * @var self
     */
    private static $instance;
    
    protected function __construct()
    {
        parent::__construct(
            self::TIMESTAMP,
            'String expression as defined in RFC-3339.'
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
