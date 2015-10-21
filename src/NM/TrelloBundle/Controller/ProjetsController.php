<?php

namespace NM\TrelloBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use NM\TrelloBundle\Entity\Projets;
use NM\TrelloBundle\Form\ProjetsType;

/**
 * Projets controller.
 *
 * @Route("/projets")
 */
class ProjetsController extends Controller
{

    /**
     * Lists all Projets entities.
     *
     * @Route("/", name="projets")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NMTrelloBundle:Projets')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Projets entity.
     *
     * @Route("/", name="projets_create")
     * @Method("POST")
     * @Template("NMTrelloBundle:Projets:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Projets();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projets_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Projets entity.
     *
     * @param Projets $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Projets $entity)
    {
        $form = $this->createForm(new ProjetsType(), $entity, array(
            'action' => $this->generateUrl('projets_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Projets entity.
     *
     * @Route("/new", name="projets_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Projets();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Projets entity.
     *
     * @Route("/{id}", name="projets_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NMTrelloBundle:Projets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Projets entity.
     *
     * @Route("/{id}/edit", name="projets_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NMTrelloBundle:Projets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projets entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Projets entity.
    *
    * @param Projets $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Projets $entity)
    {
        $form = $this->createForm(new ProjetsType(), $entity, array(
            'action' => $this->generateUrl('projets_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Projets entity.
     *
     * @Route("/{id}", name="projets_update")
     * @Method("PUT")
     * @Template("NMTrelloBundle:Projets:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NMTrelloBundle:Projets')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projets entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('projets_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Projets entity.
     *
     * @Route("/{id}", name="projets_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NMTrelloBundle:Projets')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projets entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projets'));
    }

    /**
     * Creates a form to delete a Projets entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('projets_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
