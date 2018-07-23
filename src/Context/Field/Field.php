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
     * Name of the 'eventType' field of a CloudEvents context.
     */
    protected const EVENT_TYPE = 'eventType';
    
    /**
     * Name of the 'eventTypeVersion' field of a CloudEvents context.
     */
    protected const EVENT_TYPE_VERSION = 'eventTypeVersion';
    
    /**
     * Name of the 'cloudEventsVersion' field of a CloudEvents context.
     */
    protected const CLOUD_EVENTS_VERSION = 'cloudEventsVersion';
    
    /**
     * Name of the 'source' field of a CloudEvents context.
     */
    protected const SOURCE = 'source';
    
    /**
     * Name of the 'eventID' field of a CloudEvents context.
     */
    protected const EVENT_ID = 'eventID';
    
    /**
     * Name of the 'eventTime' field of a CloudEvents context.
     */
    protected const EVENT_TIME = 'eventTime';
    
    /**
     * Name of the 'schemaURL' field of a CloudEvents context.
     */
    protected const SCHEMA_URL = 'schemaURL';
    
    /**
     * Name of the 'contentType' field of a CloudEvents context.
     */
    protected const CONTENT_TYPE = 'contentType';
    
    /**
     * Name of the 'extensions' field of a CloudEvents context.
     */
    protected const EXTENSIONS = 'extensions';
    
    /**
     * Name of the 'date' field of a CloudEvents context.
     */
    protected const DATA = 'date';
    
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
