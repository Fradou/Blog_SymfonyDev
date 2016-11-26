<?php

namespace BlogBundle\Controller;

use BlogBundle\Entity\Logcom;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Logcom controller.
 *
 */
class LogcomController extends Controller
{
    /**
     * Lists all logcom entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $logcoms = $em->getRepository('BlogBundle:Logcom')->findAll();

        return $this->render('logcom/index.html.twig', array(
            'logcoms' => $logcoms,
        ));
    }

    /**
     * Creates a new logcom entity.
     *
     */
    public function newAction(Request $request)
    {
        $logcom = new Logcom();
        $form = $this->createForm('BlogBundle\Form\LogcomType', $logcom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($logcom);
            $em->flush($logcom);

            return $this->redirectToRoute('logcom_show', array('id' => $logcom->getId()));
        }

        return $this->render('logcom/new.html.twig', array(
            'logcom' => $logcom,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a logcom entity.
     *
     */
    public function showAction(Logcom $logcom)
    {
        $deleteForm = $this->createDeleteForm($logcom);

        return $this->render('logcom/show.html.twig', array(
            'logcom' => $logcom,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing logcom entity.
     *
     */
    public function editAction(Request $request, Logcom $logcom)
    {
        $deleteForm = $this->createDeleteForm($logcom);
        $editForm = $this->createForm('BlogBundle\Form\LogcomType', $logcom);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('logcom_edit', array('id' => $logcom->getId()));
        }

        return $this->render('logcom/edit.html.twig', array(
            'logcom' => $logcom,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a logcom entity.
     *
     */
    public function deleteAction(Request $request, Logcom $logcom)
    {
        $form = $this->createDeleteForm($logcom);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($logcom);
            $em->flush($logcom);
        }

        return $this->redirectToRoute('logcom_index');
    }

    /**
     * Creates a form to delete a logcom entity.
     *
     * @param Logcom $logcom The logcom entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Logcom $logcom)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('logcom_delete', array('id' => $logcom->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
