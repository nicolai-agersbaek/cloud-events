<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Context\ContextInterface;
use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of an 'eventTime' field in a CloudEvents context.
 *
 * @api
 */
final class EventTimeField extends Field
{
    
    /**
     * @param \DateTimeInterface $value
     */
    public function __construct(\DateTimeInterface $value)
    {
        parent::__construct(
            ContextInterface::SOURCE,
            TypeFactory::timestamp(),
            'Timestamp of when the event happened.',
            $value
        );
    }
    
    /**
     * @inheritDoc
     */
    public function getValue() : \DateTimeInterface
    {
        return $this->value;
    }
}
