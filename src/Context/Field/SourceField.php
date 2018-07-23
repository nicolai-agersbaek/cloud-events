<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of a 'source' field in a CloudEvents context.
 *
 * @api
 */
final class SourceField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            self::SOURCE,
            TypeFactory::URI(),
            'This describes the event producer. Often this will include information such as the type of the event source, the organization publishing the event, and some unique identifiers. The exact syntax and semantics behind the data encoded in the URI is event producer defined.',
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
