<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller
{
    public function indexAction()
    {


        return $this->render('BlogBundle:Blog:index.html.twig', array(
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
