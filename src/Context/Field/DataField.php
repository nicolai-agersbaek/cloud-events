<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Literal\ObjectInterface;
use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of a 'data' field in a CloudEvents context.
 *
 * @api
 */
final class DataField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            self::SOURCE,
            TypeFactory::object(),
            'The event payload. The payload depends on the eventType, schemaURL and eventTypeVersion, the payload is encoded into a media format which is specified by the contentType attribute (e.g. application/json).',
            $value
        );
    }
    
    /**
     * @inheritDoc
     */
    public function getValue() : ObjectInterface
    {
        return $this->value;
    }
}
