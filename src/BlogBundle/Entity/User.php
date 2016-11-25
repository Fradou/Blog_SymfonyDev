<?php

namespace BlogBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var integer
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $logcoms;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comments;


    /**
     * Add logcom
     *
     * @param \BlogBundle\Entity\Logcom $logcom
     *
     * @return User
     */
    public function addLogcom(\BlogBundle\Entity\Logcom $logcom)
    {
        $this->logcoms[] = $logcom;

        return $this;
    }

    /**
     * Remove logcom
     *
     * @param \BlogBundle\Entity\Logcom $logcom
     */
    public function removeLogcom(\BlogBundle\Entity\Logcom $logcom)
    {
        $this->logcoms->removeElement($logcom);
    }

    /**
     * Get logcoms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLogcoms()
    {
        return $this->logcoms;
    }

    /**
     * Add comment
     *
     * @param \BlogBundle\Entity\Comment $comment
     *
     * @return User
     */
    public function addComment(\BlogBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \BlogBundle\Entity\Comment $comment
     */
    public function removeComment(\BlogBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
