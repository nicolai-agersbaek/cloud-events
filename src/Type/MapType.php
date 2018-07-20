<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a Map type in the CloudEvents specification.
 *
 * @api
 */
class MapType extends Type
{
    
    /**
     * @var self
     */
    private static $instance;
    
    protected function __construct()
    {
        parent::__construct(
            self::MAP,
            'String-indexed dictionary of Object-typed values.'
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
