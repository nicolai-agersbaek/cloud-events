<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents;

/**
 * Interface VersionInterface
 */
interface VersionInterface
{
    
    /**
     * @return int
     */
    public function getMajor() : int;
    
    /**
     * @return int
     */
    public function getMinor() : int;
    
    /**
     * @return int
     */
    public function getPatch() : int;
    
    /**
     * @param VersionInterface $version
     *
     * @return int
     */
    public function compareTo(VersionInterface $version) : int;
    
    /**
     * @return string
     */
    public function __toString() : string;
}
