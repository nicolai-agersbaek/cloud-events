<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Literal;

/**
 * Implementation of a CloudEvents 'Map' type.
 *
 * @api
 */
interface MapInterface
{
    
    /**
     * @param string $key
     *
     * @return ObjectInterface
     */
    public function get(string $key) : ObjectInterface;
    
    /**
     * @param string          $key
     * @param ObjectInterface $value
     *
     * @return MapInterface
     */
    public function set(string $key, ObjectInterface $value) : self;
}
