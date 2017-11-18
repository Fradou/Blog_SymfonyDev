<?php

namespace BlogBundle\Entity;

/**
 * Skill
 */
class Skill
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var integer
     */
    private $priority;

    /**
     * @var boolean
     */
    private $display;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $skill_details;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skill_details = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return Skill
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return Skill
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set display
     *
     * @param boolean $display
     *
     * @return Skill
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return boolean
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Add skillDetail
     *
     * @param \BlogBundle\Entity\SkillDetail $skillDetail
     *
     * @return Skill
     */
    public function addSkillDetail(\BlogBundle\Entity\SkillDetail $skillDetail)
    {
        $this->skill_details[] = $skillDetail;

        return $this;
    }

    /**
     * Remove skillDetail
     *
     * @param \BlogBundle\Entity\SkillDetail $skillDetail
     */
    public function removeSkillDetail(\BlogBundle\Entity\SkillDetail $skillDetail)
    {
        $this->skill_details->removeElement($skillDetail);
    }

    /**
     * Get skillDetails
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSkillDetails()
    {
        return $this->skill_details;
    }
}

