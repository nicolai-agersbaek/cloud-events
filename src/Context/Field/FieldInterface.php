<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Type\TypeInterface;

/**
 * Abstract specification of a context field.
 *
 * @api
 */
interface FieldInterface
{
    
    /**
     * @return string
     */
    public function getName() : string;
    
    /**
     * @return TypeInterface
     */
    public function getType() : TypeInterface;
    
    /**
     * @return mixed
     */
    public function getValue();
}
