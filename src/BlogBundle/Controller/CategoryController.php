<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{
    /**
     * Lists all category entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('BlogBundle:Category')->findAll();

        return $this->render('category/index.html.twig', array(
            'categories' => $categories,
        ));
    }

    /**
     * Finds and displays a category entity.
     *
     */
    public function showAction(Category $category)
    {

        return $this->render('category/show.html.twig', array(
            'category' => $category,
        ));
    }
}
