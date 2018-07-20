<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a String type in the CloudEvents specification.
 */
class StringType extends Type
{
    
    public function __construct()
    {
        parent::__construct(
            self::STRING,
            'Sequence of printable Unicode characters.'
        );
    }
}
