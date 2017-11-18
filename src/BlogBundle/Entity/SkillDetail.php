<?php

namespace BlogBundle\Entity;

/**
 * SkillDetail
 */
class SkillDetail
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
     * @var \BlogBundle\Entity\Skill
     */
    private $skill;


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
     * @return SkillDetail
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
     * @return SkillDetail
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
     * @return SkillDetail
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
     * Set skill
     *
     * @param \BlogBundle\Entity\Skill $skill
     *
     * @return SkillDetail
     */
    public function setSkill(\BlogBundle\Entity\Skill $skill = null)
    {
        $this->skill = $skill;

        return $this;
    }

    /**
     * Get skill
     *
     * @return \BlogBundle\Entity\Skill
     */
    public function getSkill()
    {
        return $this->skill;
    }
}

