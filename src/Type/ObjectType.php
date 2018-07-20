<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of an Object type in the CloudEvents specification.
 */
class ObjectType extends AbstractType
{
    
    public function __construct()
    {
        parent::__construct(
            self::OBJECT,
            'Either a String, or a Binary, or a Map.'
        );
    }
}
