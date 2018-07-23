<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Literal;

use SmartWeb\CloudEvents\Type\BinaryType;
use SmartWeb\CloudEvents\Type\MapType;
use SmartWeb\CloudEvents\Type\StringType;
use SmartWeb\CloudEvents\Type\TypeInterface;

/**
 * Implementation of a CloudEvents 'Object' type.
 *
 * @api
 */
interface ObjectInterface
{
    
    /**
     * @return StringType|BinaryType|MapType
     */
    public function getUnderlyingType() : TypeInterface;
    
    /**
     * @return string|MapInterface
     */
    public function getValue();
}
