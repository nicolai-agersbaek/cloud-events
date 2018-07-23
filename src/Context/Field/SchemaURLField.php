<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of a 'schemaURL' field in a CloudEvents context.
 *
 * @api
 */
final class SchemaURLField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            self::SOURCE,
            TypeFactory::URI(),
            'A link to the schema that the data attribute adheres to.',
            $value
        );
    }
    
    /**
     * @inheritDoc
     */
    public function getValue() : string
    {
        return $this->value;
    }
}
