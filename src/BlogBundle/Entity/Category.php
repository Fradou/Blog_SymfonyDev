<?php

namespace BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $articles;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add article
     *
     * @param \BlogBundle\Entity\Article $article
     *
     * @return Category
     */
    public function addArticle(\BlogBundle\Entity\Article $article)
    {
        $this->articles[] = $article;

        return $this;
    }

    /**
     * Remove article
     *
     * @param \BlogBundle\Entity\Article $article
     */
    public function removeArticle(\BlogBundle\Entity\Article $article)
    {
        $this->articles->removeElement($article);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $content;


    /**
     * Add content
     *
     * @param \BlogBundle\Entity\Content $content
     *
     * @return Category
     */
    public function addContent(\BlogBundle\Entity\Content $content)
    {
        $this->content[] = $content;

        return $this;
    }

    /**
     * Remove content
     *
     * @param \BlogBundle\Entity\Content $content
     */
    public function removeContent(\BlogBundle\Entity\Content $content)
    {
        $this->content->removeElement($content);
    }

    /**
     * Get content
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContent()
    {
        return $this->content;
    }

    public function __toString()
    {
        return strval($this->name);
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $contents;


    /**
     * Get contents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getContents()
    {
        return $this->contents;
    }
}
