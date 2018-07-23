<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Context\ContextInterface;
use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of an 'eventID' field in a CloudEvents context.
 *
 * @api
 */
final class EventIDField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            ContextInterface::SOURCE,
            TypeFactory::string(),
            'ID of the event. The semantics of this string are explicitly undefined to ease the implementation of producers. Enables deduplication.',
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
