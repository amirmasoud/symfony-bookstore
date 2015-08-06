<?php

namespace Chakosh\NewsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Chakosh\NewsBundle\Entity\postCategory;
use Chakosh\NewsBundle\Form\postCategoryType;

/**
 * postCategory controller.
 *
 */
class postCategoryController extends Controller
{

    /**
     * Lists all postCategory entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ChakoshNewsBundle:postCategory')->findAll();

        return $this->render('ChakoshNewsBundle:postCategory:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new postCategory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new postCategory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('blog-category_show', array('id' => $entity->getId())));
        }

        return $this->render('ChakoshNewsBundle:postCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a postCategory entity.
    *
    * @param postCategory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(postCategory $entity)
    {
        $form = $this->createForm(new postCategoryType(), $entity, array(
            'action' => $this->generateUrl('blog-category_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new postCategory entity.
     *
     */
    public function newAction()
    {
        $entity = new postCategory();
        $form   = $this->createCreateForm($entity);

        return $this->render('ChakoshNewsBundle:postCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a postCategory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshNewsBundle:postCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find postCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ChakoshNewsBundle:postCategory:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing postCategory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshNewsBundle:postCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find postCategory entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ChakoshNewsBundle:postCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a postCategory entity.
    *
    * @param postCategory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(postCategory $entity)
    {
        $form = $this->createForm(new postCategoryType(), $entity, array(
            'action' => $this->generateUrl('blog-category_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing postCategory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshNewsBundle:postCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find postCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('blog-category_edit', array('id' => $id)));
        }

        return $this->render('ChakoshNewsBundle:postCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a postCategory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ChakoshNewsBundle:postCategory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find postCategory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('blog-category'));
    }

    /**
     * Creates a form to delete a postCategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('blog-category_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
