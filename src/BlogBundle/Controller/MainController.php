<?php

namespace BlogBundle\Controller;

use BlogBundle\Repository\ContentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('Main/index.html.twig', array(
            // ...
        ));
    }

    public function logbookAction()
    {
        $em = $this->getDoctrine()->getManager();

        $logcoms = $em->getRepository('BlogBundle:Logcom')->findBy(
            array(),
            array('id' => 'desc'),
            5,
            0
        );

        $logbooks = $em->getRepository('BlogBundle:Logbook')->findBy(array(),array('date' => 'desc'));

        return $this->render('Main/index.html.twig', array(
            'logbooks' => $logbooks,
            'logcoms' => $logcoms,
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

           $twigcontent['Skills']= $em->getRepository('BlogBundle:Skill')->findAll();
     //   var_dump($twigcontent['Skill']);


        return $this->render('Main/resume.html.twig', $twigcontent);
    }

}
