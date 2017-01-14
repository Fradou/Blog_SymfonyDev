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

        return $this->render('Main/logbook.html.twig', array(
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
        $sections = ['Presentation','Hackaton', 'Projet' ];

        /**
         * @var $repository ContentRepository
         */

            $Presentation = $em->getRepository('BlogBundle:Content')->getContent('Presentation');
            $Hackatons = $em->getRepository('BlogBundle:Content')->getContent('Hackaton');
            $Project = $em->getRepository('BlogBundle:Content')->getContent('Projet');


        return $this->render('Main/resume.html.twig', array(
            'Presentation' => $Presentation,
            'Hackatons' => $Hackatons,
            'Project' => $Project
        ));
    }

}
