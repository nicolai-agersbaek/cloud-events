<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents\Type;

/**
 * Definition of an abstract data type from the CloudEvents specification.
 *
 * @api
 */
interface TypeInterface
{
    
    /**
     * @return string
     */
    public function getName() : string;
    
    /**
     * @return string
     */
    public function getDescription() : string;
}
