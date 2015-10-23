<?php

namespace NM\TrelloBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use NM\TrelloBundle\Entity\taches;
use NM\TrelloBundle\Form\tachesType;

/**
 * taches controller.
 *
 */
class tachesController extends Controller
{

    /**
     * Lists all taches entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NMTrelloBundle:taches')->findAll();

        return $this->render('NMTrelloBundle:taches:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new taches entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new taches();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('taches_show', array('id' => $entity->getId())));
        }

        return $this->render('NMTrelloBundle:taches:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a taches entity.
     *
     * @param taches $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(taches $entity)
    {
        $form = $this->createForm(new tachesType(), $entity, array(
            'action' => $this->generateUrl('taches_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Creer la tache', 'attr' => array('class' => 'btn btn-primary form-control')));

        return $form;
    }

    /**
     * Displays a form to create a new taches entity.
     *
     */
    public function newAction()
    {
        $entity = new taches();
        $form   = $this->createCreateForm($entity);

        return $this->render('NMTrelloBundle:taches:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a taches entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NMTrelloBundle:taches')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find taches entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NMTrelloBundle:taches:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing taches entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NMTrelloBundle:taches')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find taches entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NMTrelloBundle:taches:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a taches entity.
    *
    * @param taches $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(taches $entity)
    {
        $form = $this->createForm(new tachesType(), $entity, array(
            'action' => $this->generateUrl('taches_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier la tache', 'attr' => array('class' => 'btn btn-primary form-control')));

        return $form;
    }
    /**
     * Edits an existing taches entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NMTrelloBundle:taches')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find taches entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('taches_edit', array('id' => $id)));
        }

        return $this->render('NMTrelloBundle:taches:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a taches entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NMTrelloBundle:taches')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find taches entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('taches'));
    }

    /**
     * Creates a form to delete a taches entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('taches_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer la tache', 'attr' => array('class' => 'btn btn-danger form-control')))
            ->getForm()
        ;
    }
}
