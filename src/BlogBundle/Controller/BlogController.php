<?php

namespace BlogBundle\Controller;

use BlogBundle\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        /**
         * @var $repository ArticleRepository
         */
            $articles= $em->getRepository('BlogBundle:Article')->getArticleSample('Dev Web', 2);


        return $this->render('Blog/index.html.twig', array(
            'articles' => $articles,
            // ...
        ));
    }

    public function articleAction()
    {
        return $this->render('BlogBundle:Blog:article.html.twig', array(
            // ...
        ));
    }

}
