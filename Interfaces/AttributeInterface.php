<?php
namespace Landmarx\Component\Attribute\Interfaces;

/**
 * Attribute Interface
 */
interface AttributeInterface
{
    /**
     * Get name
     * @return string
     */
    public function getName();
    
    /**
     * Set name
     * @param string $name
     */
    public function setName($name);
    
    /**
     * Get description
     * @return string
     */
    public function getDescription();
    
    /**
     * Set description
     * @param string $description
     */
    public function setDescription($description);
    
    /**
     * Get Options
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getOptions();
    
    /**
     * Get Option
     * @param string $option
     * @return \Landmarx\Bundle\LandmarkBundle\Document\Option
     */
    public function getOption($option);
    
    public function setOptions(array $options);
    
    /**
     * Add Option
     * @param \Landmarx\Bundle\AttributeBundle\Document\Option $option
     * @return \Landmarx\Component\Attribute\Interfaces\AttributeInterface
     */
    public function addOption(\Landmarx\Bundle\AttributeBundle\Document\Option $option);
    
    /**
     * Is public
     * @param boolean|null $public
     * @return boolean|\Landmarx\Component\AttributeInterfaces\AttributeInterface\
     */
    public function isPublic($public = null);
}
