<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Type\TypeFactory;

/**
 * Instance of a 'contentType' field in a CloudEvents context.
 *
 * @api
 */
final class ContentTypeField extends Field
{
    
    /**
     * @param string $value
     */
    public function __construct(string $value)
    {
        parent::__construct(
            self::SOURCE,
            TypeFactory::string(),
            'Describes the data encoding format.',
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
