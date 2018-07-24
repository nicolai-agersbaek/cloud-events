<?php
declare(strict_types = 1);


namespace SmartWeb\CloudEvents;

/**
 * Class Version
 */
class Version implements VersionInterface
{
    
    /**
     * @var int
     */
    private $major;
    
    /**
     * @var int
     */
    private $minor;
    
    /**
     * @var int
     */
    private $patch;
    
    /**
     * Version constructor.
     *
     * @param int $major
     * @param int $minor
     * @param int $patch
     */
    public function __construct(int $major, int $minor, int $patch)
    {
        $this->major = $major;
        $this->minor = $minor;
        $this->patch = $patch;
    }
    
    /**
     * @inheritDoc
     */
    public function getMajor() : int
    {
        return $this->major;
    }
    
    /**
     * @inheritDoc
     */
    public function getMinor() : int
    {
        return $this->minor;
    }
    
    /**
     * @inheritDoc
     */
    public function getPatch() : int
    {
        return $this->patch;
    }
    
    /**
     * @inheritDoc
     */
    public function __toString() : string
    {
        return "{$this->getMajor()}.{$this->getMinor()}.{$this->getPatch()}";
    }
    
    /**
     * @inheritDoc
     */
    public function compareTo(VersionInterface $version) : int
    {
        return \version_compare($this, $version);
    }
}
