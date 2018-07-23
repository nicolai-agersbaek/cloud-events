<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of an 'eventTypeVersion' field in a CloudEvents context.
 *
 * @api
 */
final class EventTypeVersionField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            self::EVENT_TYPE_VERSION,
            TypeFactory::string(),
            'The version of the eventType. This enables the interpretation of data by eventual consumers, requires the consumer to be knowledgeable about the producer.',
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
