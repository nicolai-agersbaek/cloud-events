<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a Map type in the CloudEvents specification.
 */
class MapType extends Type
{
    
    public function __construct()
    {
        parent::__construct(
            self::MAP,
            'String-indexed dictionary of Object-typed values.'
        );
    }
}
