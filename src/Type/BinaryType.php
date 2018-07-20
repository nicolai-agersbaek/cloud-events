<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a Binary type in the CloudEvents specification.
 */
class BinaryType extends AbstractType
{
    
    public function __construct()
    {
        parent::__construct(
            self::BINARY,
            'Sequence of bytes.'
        );
    }
}
