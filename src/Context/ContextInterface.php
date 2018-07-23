<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Context;

use SmartWeb\CloudEvents\Context\Field\ContentTypeField;
use SmartWeb\CloudEvents\Context\Field\DataField;
use SmartWeb\CloudEvents\Context\Field\EventIDField;
use SmartWeb\CloudEvents\Context\Field\EventTimeField;
use SmartWeb\CloudEvents\Context\Field\EventTypeField;
use SmartWeb\CloudEvents\Context\Field\EventTypeVersionField;
use SmartWeb\CloudEvents\Context\Field\ExtensionsField;
use SmartWeb\CloudEvents\Context\Field\SchemaURLField;
use SmartWeb\CloudEvents\Context\Field\SourceField;

/**
 * Context is designed such that it can be delivered separately from the event data (e.g. in protocol headers or
 * protocol specific attributes). This allows the context to be inspected at the destination without having to
 * deserialize the event data. The context might also need to be serialized with the event data for some use cases
 * (e.g. a JSON implementation might use one JSON object that contains both context and data).
 *
 * @api
 */
interface ContextInterface extends \Serializable
{
    
    /**
     * Name of the 'eventType' field of a CloudEvents context.
     */
    public const EVENT_TYPE = 'eventType';
    
    /**
     * Name of the 'eventTypeVersion' field of a CloudEvents context.
     */
    public const EVENT_TYPE_VERSION = 'eventTypeVersion';
    
    /**
     * Name of the 'cloudEventsVersion' field of a CloudEvents context.
     */
    public const CLOUD_EVENTS_VERSION = 'cloudEventsVersion';
    
    /**
     * Name of the 'source' field of a CloudEvents context.
     */
    public const SOURCE = 'source';
    
    /**
     * Name of the 'eventID' field of a CloudEvents context.
     */
    public const EVENT_ID = 'eventID';
    
    /**
     * Name of the 'eventTime' field of a CloudEvents context.
     */
    public const EVENT_TIME = 'eventTime';
    
    /**
     * Name of the 'schemaURL' field of a CloudEvents context.
     */
    public const SCHEMA_URL = 'schemaURL';
    
    /**
     * Name of the 'contentType' field of a CloudEvents context.
     */
    public const CONTENT_TYPE = 'contentType';
    
    /**
     * Name of the 'extensions' field of a CloudEvents context.
     */
    public const EXTENSIONS = 'extensions';
    
    /**
     * Name of the 'date' field of a CloudEvents context.
     */
    public const DATA = 'date';
    
    /**
     * @return EventTypeField
     */
    public function getEventType() : EventTypeField;
    
    /**
     * @return EventTypeVersionField
     */
    public function getEventTypeVersion() : EventTypeVersionField;
    
    /**
     * @return SourceField
     */
    public function getSource() : SourceField;
    
    /**
     * @return EventIDField
     */
    public function getEventId() : EventIDField;
    
    /**
     * @return EventTimeField
     */
    public function getEventTime() : EventTimeField;
    
    /**
     * @return SchemaURLField
     */
    public function getSchemaURL() : SchemaURLField;
    
    /**
     * @return ContentTypeField
     */
    public function getContentType() : ContentTypeField;
    
    /**
     * @return ExtensionsField
     */
    public function getExtensions() : ExtensionsField;
    
    /**
     * @return DataField
     */
    public function getData() : DataField;
}
