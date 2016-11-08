<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Logbook;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Logbook controller.
 *
 */
class LogbookController extends Controller
{
    /**
     * Lists all logbook entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $logbooks = $em->getRepository('BlogBundle:Logbook')->findAll();

        return $this->render('logbook/index.html.twig', array(
            'logbooks' => $logbooks,
        ));
    }

    /**
     * Creates a new logbook entity.
     *
     */
    public function newAction(Request $request)
    {
        $logbook = new Logbook();
        $form = $this->createForm('BlogBundle\Form\LogbookType', $logbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($logbook);
            $em->flush($logbook);

            return $this->redirectToRoute('logbook_show', array('id' => $logbook->getId()));
        }

        return $this->render('logbook/new.html.twig', array(
            'logbook' => $logbook,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a logbook entity.
     *
     */
    public function showAction(Logbook $logbook)
    {
        $deleteForm = $this->createDeleteForm($logbook);

        return $this->render('logbook/show.html.twig', array(
            'logbook' => $logbook,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing logbook entity.
     *
     */
    public function editAction(Request $request, Logbook $logbook)
    {
        $deleteForm = $this->createDeleteForm($logbook);
        $editForm = $this->createForm('BlogBundle\Form\LogbookType', $logbook);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('logbook_edit', array('id' => $logbook->getId()));
        }

        return $this->render('logbook/edit.html.twig', array(
            'logbook' => $logbook,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a logbook entity.
     *
     */
    public function deleteAction(Request $request, Logbook $logbook)
    {
        $form = $this->createDeleteForm($logbook);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($logbook);
            $em->flush($logbook);
        }

        return $this->redirectToRoute('logbook_index');
    }

    /**
     * Creates a form to delete a logbook entity.
     *
     * @param Logbook $logbook The logbook entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Logbook $logbook)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('logbook_delete', array('id' => $logbook->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
