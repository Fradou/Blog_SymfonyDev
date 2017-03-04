<?php

namespace BlogBundle\Controller;

use BlogBundle\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('Main/index.html.twig', array(
        ));
    }

    public function resumeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sections = ['Presentation','Hackaton', 'Project' ];
        $twigcontent = [];

        /**
         * @var $repository ContentRepository
         */
        foreach ($sections as $value) {
            $twigcontent[$value]= $em->getRepository('BlogBundle:Content')->getContent($value);
        }

        return $this->render('Main/resume.html.twig', $twigcontent);
    }

}
