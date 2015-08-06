<?php

namespace Chakosh\CommentBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Chakosh\CommentBundle\Entity\Comment;
use Chakosh\CommentBundle\Form\CommentType;
use Chakosh\BlogBundle\Entity\Book;

use Symfony\Component\HttpFoundation\Response;

/**
 * Comment controller.
 *
 */
class CommentController extends Controller
{

    /**
     * Lists all Comment entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ChakoshCommentBundle:Comment')->findAll();

        return $this->render('ChakoshCommentBundle:Comment:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Comment entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Comment();
        $form = $this->createForm(new CommentType(), $entity);
        $form->submit($request);
        $post = new Book();
        $em = $this->getDoctrine()->getManager();
        $id = $request->query->get('book-id');
        $get_post = $em->getRepository('ChakoshBlogBundle:Book')->findOneById($id);
        if(!$get_post)
        {
            throw $this->createNotFoundException('هیچ کتابی یافت نشد!');
        }
        $post = $get_post;
        if ($form->isValid() && $request->getMethod() == 'POST') {
            $entity->setIp($this->container->get('request')->getClientIp());
            $entity->setPostId($id);
            
            $validator = $this->get('validator');
            $errors = $validator->validate($entity);
            
            $comment_num = $post->getcommentNum();//get number of comments
            $comment_num += 1;//we have new comment
            $post->setcommentNum($comment_num);
            
            
            
            $em->persist($post);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('_show', array('id' => $get_post->getLink())));
        }

            return $this->redirect($this->generateUrl('_show', array('id' => $get_post->getLink())));
    }

    /**
     * Displays a form to create a new Comment entity.
     *
     */
    public function newAction()
    {
        $entity = new Comment();
        $form   = $this->createForm(new CommentType(), $entity);

        return $this->render('ChakoshCommentBundle:Comment:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Comment entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshCommentBundle:Comment')->findByPostId($id);

        if (!$entity_comment) {
            throw $this->createNotFoundException('Unable to find Comment entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
           'entity'      => $entity,
           'delete_form' => $deleteForm->createView(),        );
    }

    /**
     * Displays a form to edit an existing Comment entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshCommentBundle:Comment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comment entity.');
        }

        $editForm = $this->createForm(new CommentType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ChakoshCommentBundle:Comment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Comment entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshCommentBundle:Comment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comment entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CommentType(), $entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comment_edit', array('id' => $id)));
        }

        return $this->render('ChakoshCommentBundle:Comment:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Comment entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->submit($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ChakoshCommentBundle:Comment')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comment entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comment'));
    }

    /**
     * Creates a form to delete a Comment entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
