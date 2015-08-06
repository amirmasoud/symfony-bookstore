<?php

namespace Chakosh\OptionsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Chakosh\OptionsBundle\Entity\Options;
use Chakosh\OptionsBundle\Form\OptionsType;

/**
 * Options controller.
 *
 */
class OptionsController extends Controller
{

    /**
     * Lists all Options entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ChakoshOptionsBundle:Options')->findAll();

        return $this->render('ChakoshOptionsBundle:Options:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Options entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Options();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_setting__show', array('id' => $entity->getId())));
        }

        return $this->render('ChakoshOptionsBundle:Options:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Options entity.
    *
    * @param Options $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Options $entity)
    {
        $form = $this->createForm(new OptionsType(), $entity, array(
            'action' => $this->generateUrl('admin_setting__create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Options entity.
     *
     */
    public function newAction()
    {
        $entity = new Options();
        $form   = $this->createCreateForm($entity);

        return $this->render('ChakoshOptionsBundle:Options:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Options entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshOptionsBundle:Options')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Options entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ChakoshOptionsBundle:Options:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Options entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshOptionsBundle:Options')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Options entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ChakoshOptionsBundle:Options:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Options entity.
    *
    * @param Options $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Options $entity)
    {
        $form = $this->createForm(new OptionsType(), $entity, array(
            'action' => $this->generateUrl('admin_setting__update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Options entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshOptionsBundle:Options')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Options entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admin_setting__edit', array('id' => $id)));
        }

        return $this->render('ChakoshOptionsBundle:Options:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Options entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ChakoshOptionsBundle:Options')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Options entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_setting_'));
    }

    /**
     * Creates a form to delete a Options entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_setting__delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
