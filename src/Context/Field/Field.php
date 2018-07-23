<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context\Field;

use SmartWeb\CloudEvents\Type\TypeInterface;

/**
 * Class Field
 *
 * @internal
 */
abstract class Field implements FieldInterface
{
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var TypeInterface
     */
    private $type;
    
    /**
     * @var string
     */
    private $description;
    
    /**
     * @var mixed
     */
    protected $value;
    
    /**
     * Field constructor.
     *
     * @param string        $name
     * @param TypeInterface $type
     * @param string        $description
     * @param mixed         $value
     */
    protected function __construct(
        string $name,
        TypeInterface $type,
        string $description,
        $value
    ) {
        $this->type = $type;
        $this->description = $description;
        $this->value = $value;
        $this->name = $name;
    }
    
    // TODO: Require list of validation constraints from sub-classes, to enable shared validation (base validation drawn from type of this field).
    
    /**
     * @inheritDoc
     */
    final public function getName() : string
    {
        return $this->name;
    }
    
    /**
     * @inheritDoc
     */
    final public function getType() : TypeInterface
    {
        return $this->type;
    }
    
    /**
     * @inheritDoc
     */
    final public function getDescription() : string
    {
        return $this->description;
    }
}
