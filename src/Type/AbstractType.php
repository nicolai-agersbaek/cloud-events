<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Base class for type definitions in the CloudEvents specification.
 */
abstract class AbstractType implements TypeInterface
{
    
    /**
     * Name of the String type in the CloudEvents specification.
     */
    protected const STRING = 'String';
    
    /**
     * Name of the Binary type in the CloudEvents specification.
     */
    protected const BINARY = 'Binary';
    
    /**
     * Name of the Map type in the CloudEvents specification.
     */
    protected const MAP = 'Map';
    
    /**
     * Name of the Object type in the CloudEvents specification.
     */
    protected const OBJECT = 'Object';
    
    /**
     * Name of the URI type in the CloudEvents specification.
     */
    protected const URI = 'URI';
    
    /**
     * Name of the Timestamp type in the CloudEvents specification.
     */
    protected const TIMESTAMP = 'Timestamp';
    
    /**
     * @var string
     */
    private $name;
    
    /**
     * @var string
     */
    private $description;
    
    /**
     * @param string $name
     * @param string $description
     */
    public function __construct(string $name, string $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
    
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
    final public function getDescription() : string
    {
        return $this->description;
    }
}
