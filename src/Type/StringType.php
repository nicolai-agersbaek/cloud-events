<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a String type in the CloudEvents specification.
 *
 * @api
 */
final class StringType extends Type
{
    
    /**
     * @var self
     */
    private static $instance;
    
    protected function __construct()
    {
        parent::__construct(
            self::STRING,
            'Sequence of printable Unicode characters.'
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
