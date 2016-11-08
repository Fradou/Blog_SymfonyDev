<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('Main/index.html.twig', array(
            // ...
        ));
    }

    public function resumeAction()
    {
        return $this->render('Main/resume.html.twig', array(
            // ...
        ));
    }

    public function contactAction()
    {
        return $this->render('Main/contact.html.twig', array(
            // ...
        ));
    }

    public function logbookAction()
    {
        return $this->render('Main/logbook.html.twig', array(
            // ...
        ));
    }

}
