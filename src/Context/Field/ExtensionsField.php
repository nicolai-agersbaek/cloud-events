<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Literal\MapInterface;
use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of an 'extensions' field in a CloudEvents context.
 *
 * @api
 */
final class ExtensionsField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            self::SOURCE,
            TypeFactory::map(),
            'This is for additional metadata and this does not have a mandated structure. This enables a place for custom fields a producer or middleware might want to include and provides a place to test metadata before adding them to the CloudEvents specification. See the Extensions document for a list of possible properties.',
            $value
        );
    }
    
    /**
     * @inheritDoc
     */
    public function getValue() : MapInterface
    {
        return $this->value;
    }
}
