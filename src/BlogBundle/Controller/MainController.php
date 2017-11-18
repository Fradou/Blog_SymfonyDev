<?php

namespace BlogBundle\Controller;

use BlogBundle\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    private $colorsRange = ['light-green','lime','green'];

    public function indexAction()
    {
        return $this->render('Main/index.html.twig', array(
            // ...
        ));
    }

    public function projectAction()
    {
        return $this->render('Main/project.html.twig', array(
            // ...
        ));
    }

    public function resumeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $sections = ['Presentation','Hackaton', 'Project'];
        $others = ['Skill'];
        $twigcontent = [];

        /**
         * @var $repository ContentRepository
         */
        foreach ($sections as $section) {
            $twigcontent[$section]= $em->getRepository('BlogBundle:Content')->getContent($section);
        }

           $twigcontent['Skills']= $em->getRepository('BlogBundle:Skill')->findBy([],['priority'=>'ASC']);
     //   var_dump($twigcontent['Skill']);


        return $this->render('Main/resume.html.twig', $twigcontent);
    }

}
