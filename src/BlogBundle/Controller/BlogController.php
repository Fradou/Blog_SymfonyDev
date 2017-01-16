<?php

namespace BlogBundle\Controller;

use BlogBundle\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\HttpException;

class BlogController extends Controller
{
    public function indexAction()
    {
        /**
         * @var $repository ArticleRepository
         */
        $repository= $this->getDoctrine()->getRepository('BlogBundle:Article');
        $articles=$repository->getArticleSample('', 5);
        $tags = ['Dev Web', 'Java', 'Symfony' ];

        return $this->render('Blog/index.html.twig', array(
            'articles' => $articles,
            'tags' => $tags
        ));
    }

    public function articleAction()
    {
        return $this->render('BlogBundle:Blog:article.html.twig', array(
            // ...
        ));
    }

    public function tagindexAction (Request $request, $tag)
    {
        if ($request->isXmlHttpRequest()) {
            /**
             * @var $repository ArticleRepository
             */
            $repository = $this->getDoctrine()->getRepository('BlogBundle:Article');
            $articles= $repository->getArticleSample($tag, 5);
            return new JsonResponse(array("data" => json_encode($articles)));

        } else
        {
            throw new HttpException('500', 'Invalid call');
        }
    }
}
