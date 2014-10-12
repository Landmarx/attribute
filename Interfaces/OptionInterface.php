<?php
namespace Landmarx\Component\Attribute\Interfaces;

/**
 * Option Interface
 */
interface OptionInterface
{
    /**
     * Get name
     * @return string
     */
    public function getName();
    
    /**
     * Set name
     * @param string $name
     * @return \Landmarx\Component\Attribute\Interfaces\AttributeInterface
     */
    public function setName($name);
    
    /**
     * Get description
     * @return srting
     */
    public function getDescription();
    
    /**
     * Set description
     * @param string $description
     * @return \Landmarx\Component\Attribute\Interfaces\AttributeInterface
     */
    public function setDescription($description);
    
    /**
     * Get values
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getValues();
    
    /**
     * Get value
     * @param string $value
     * @return \Landmarx\Bundle\AttributeBundle\Document\Value
     */
    public function getValue($value);
    
    /**
     * Set values
     * @param \Doctrine\Common\Collecitons\ArrayCollection
     * @return \Landmarx\Component\Attribute\Interfaces\OptionInterface
     */
    public function setValues(\Doctrine\Common\Collections\ArrayCollection $values);
    
    /**
     * Add value
     * @param \Landmarx\Bundle\AttributeBundle\Document\Value $value
     * @return \Landmarx\Component\Attribute\Interfaces\OptionInterface
     */
    public function addValue(\Landmarx\Bundle\AttributeBundle\Document\Value $value);
    
    /**
     * Is public
     * @param boolean|null $public
     * @return boolean|\Landmarx\Component\Attribute\Interfaces\OptionInterface
     */
    public function isPublic($public = null);
}
