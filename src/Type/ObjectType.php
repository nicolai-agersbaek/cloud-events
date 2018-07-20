<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of an Object type in the CloudEvents specification.
 *
 * @api
 */
class ObjectType extends Type
{
    
    /**
     * @var self
     */
    private static $instance;
    
    protected function __construct()
    {
        parent::__construct(
            self::OBJECT,
            'Either a String, or a Binary, or a Map.'
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
