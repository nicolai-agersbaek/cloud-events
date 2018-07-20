<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of a Timestamp type in the CloudEvents specification.
 */
class TimestampType extends AbstractType
{
    
    public function __construct()
    {
        parent::__construct(
            self::TIMESTAMP,
            'String expression as defined in RFC-3339.'
        );
    }
}
