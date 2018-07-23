<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of an 'eventType' field in a CloudEvents context.
 *
 * @api
 */
final class EventTypeField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            self::EVENT_TYPE,
            TypeFactory::string(),
            'Type of occurrence which has happened. Often this property is used for routing, observability, policy enforcement, etc.',
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
