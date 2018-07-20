<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Factory for creating the various types of the CloudEvents specification.
 *
 * @api
 */
final class TypeFactory
{
    
    /**
     * @var TypeInterface[]
     */
    private static $instances = [];
    
    private function __construct()
    {
    }
    
    /**
     * @return BinaryType
     */
    public static function binary() : BinaryType
    {
        return self::$instances[BinaryType::class] = self::$instances[BinaryType::class] ?? BinaryType::create();
    }
    
    /**
     * @return MapType
     */
    public static function map() : MapType
    {
        return self::$instances[MapType::class] = self::$instances[MapType::class] ?? MapType::create();
    }
    
    /**
     * @return ObjectType
     */
    public static function object() : ObjectType
    {
        return self::$instances[ObjectType::class] = self::$instances[ObjectType::class] ?? ObjectType::create();
    }
    
    /**
     * @return StringType
     */
    public static function string() : StringType
    {
        return self::$instances[StringType::class] = self::$instances[StringType::class] ?? StringType::create();
    }
    
    /**
     * @return TimestampType
     */
    public static function timestamp() : TimestampType
    {
        return self::$instances[TimestampType::class] = self::$instances[TimestampType::class] ??
                                                        TimestampType::create();
    }
    
    /**
     * @return URIType
     */
    public static function uri() : URIType
    {
        return self::$instances[URIType::class] = self::$instances[URIType::class] ?? URIType::create();
    }
}
