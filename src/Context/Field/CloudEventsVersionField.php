<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Context\ContextInterface;
use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of a 'cloudEventsVersion' field in a CloudEvents context.
 *
 * @api
 */
final class CloudEventsVersionField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            ContextInterface::CLOUD_EVENTS_VERSION,
            TypeFactory::string(),
            'The version of the CloudEvents specification which the event uses. This enables the interpretation of the context.',
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
