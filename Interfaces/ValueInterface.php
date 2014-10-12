<?php
namespace Landmarx\Component\Attribute\Interfaces;

/**
 * Value interface
 */
interface ValueInterface
{
    /**
     * Get value
     */
    public function getValue();
    
    /**
     * Set value
     * @param string $value
     * @return \Landmarx\Component\Attribute\Interfaces\ValueInterface
     */
    public function setValue($value);
    
    /**
     * Is public
     * @param boolean|null $public
     * @return boolean|\Landmarx\Component\Attribute\Interfaces\ValueInterface
     */
    public function isPublic($public = null);
}
