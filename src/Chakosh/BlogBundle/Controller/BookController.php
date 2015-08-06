<?php

namespace Chakosh\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Chakosh\BlogBundle\Entity\Book;
use Chakosh\BlogBundle\Form\BookType;
use Chakosh\CommentBundle\Entity\Comment;
use Chakosh\CommentBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use DoctrineORMEntityManager;
use DoctrineORMEntityRepository;
/**
 * Book controller.
 *
 */
class BookController extends Controller
{
    // Entities that we need

    private $book = "ChakoshBlogBundle:Book";
    private $category = "ChakoshBlogBundle:Category";
    
    private $em;
    
    /**
     * @return EntityManager em
     */
    private function em() {
        $this->em = $this->getDoctrine()->getManager();
    }
    
    /*
     * 
     * @retuen Modal
     */
    public function modalShowAction(){
        return $this->render('ChakoshHomeBundle:Admin:Modal.html.twig');
    }

    /**
     * 
     * @return Book repository
     */
    private function getBookRepository(){
        $this->em();
        return $this->em->getRepository($this->book);
    }
    
    /**
     * 
     * @return Category repository
     */
    private function getCategoryRepository(){
        $this->em();
        return $this->em->getRepository($this->category);
    }    
            
            
    /**
     * DEMO
    * Return a ajax response
    * This is an example for using ajax in symfony2
    public function greetingAction(Request $request){
       //$request = $this->get('request');
       $name=$request->request->get('formName');

       if($name!=""){//if the user has written his name
          $greeting='Hello '.$name.'. How are you today?';
          $return=array("responseCode"=>200,  "greeting"=>$greeting);
       }
       else{
          $return=array("responseCode"=>400, "greeting"=>"You have to write your name!");
       }

       $return=json_encode($return);//jscon encode the array
       return new Response($return,200,array('Content-Type'=>'application/json'));//make sure it has the correct content type
    }    
     * 
     */
    
    /**
     * list all categoris
     * @return all categories
     */
    public function categoriesAction()
    {
        $categories = $this->getCategoryRepository()->findAll();
        return $this->render('ChakoshHomeBundle:Base:categories.html.twig', array(
            'categories' => $categories
                            ));
    } 
    
    /**
     * 
     * @return paginated books
     */
    private function index() {
        //services
        $paginator  = $this->get('knp_paginator');
        $options = $this->get('options');
        
        //get Books
        $bookRepository = $this->getBookRepository();
        $dql = $bookRepository->createQueryBuilder('b')
                              ->orderBy('b.id', 'DESC')
                              ->getQuery()
                              ->getResult();
        //paginate books
        $pagination = $paginator->paginate(
            $dql/*books*/,
            $this->get('request')->query->get('page',1)/*page number*/,
            $options->getOption('posts_per_page')/*Post per page*/
        );
        return $pagination;
    }
    
    /**
     * Lists all Book entities.
     * User
     */
    public function indexAction()
    {
        $pagination = $this->index();
        return $this->render('ChakoshHomeBundle:Home:home.html.twig', array(
            'entities' => $pagination,
            ));
    }

    /**
     * Lists all Book entities.
     * Admin
     */
    public function indexAdminAction()
    {
        $pagination = $this->index();
        return $this->render('ChakoshHomeBundle:Admin:home.html.twig', array(
            'entities' => $pagination,
        ));
    }
    
    
    
    /**
     * Creates a new Book entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Book();
        $options = $this->get('options');
        
        $form = $this->createForm(new BookType(), $entity);
        $form->bind($request);
        if ($form->isValid()) {
            /**
             * set for book
             */
            
            $entity->setLink($options->slug($entity->getName(),"-"));             
            $entity->setcommentNum(0);
            $em = $this->getDoctrine()->getManager();
            
            $siteurl = $options->getOption('siteurl');
            $asset_url = $options->getOption('asseturl');
            $upload_absolute_path = $siteurl . $asset_url . $options->getOption('relative_upload_path');
            
            $cover_absolutpath = $upload_absolute_path . $entity->getCover();
            $file_absolutpath = $upload_absolute_path . $entity->getFile();
            
            $entity->setCover($cover_absolutpath);
            $entity->setFile($file_absolutpath);
            
            /**
             * set in category
             */
            foreach ($entity->getCategories() as $C)
            {
                $C->getBooks()->add($entity);
            }
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_edit', array('id' => $entity->getId())));
        }

        return $this->render('ChakoshBlogBundle:Book:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to create a new Book entity.
     *
     */
    public function newAction()
    {
        
        $entity = new Book();   
        
        $form   = $this->createForm(new BookType(), $entity);

        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository('ChakoshBlogBundle:Category')->findAll();        
        $files = $em->getRepository('ChakoshBlogBundle:Book')->uploaded_files();
        return $this->render('ChakoshHomeBundle:Admin:new.html.twig', array(
            'entity'  => $entity,
            'category'=> $category,
            'files'   => $files,
            'form'    => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Book entity.
     *
     */
    public function showAction($id)
    {
        
        
        $comment  = new Comment();
        $comment_form = $this->createForm(new CommentType(), $comment);
        
        $em = $this->getDoctrine()->getManager();
        
        $entity = new Book();
        $entity = $em->getRepository('ChakoshBlogBundle:Book')->findOneByLink($id);
        

        if (!$entity) {
            throw $this->createNotFoundException('هیچ کتابی یافت نشد!');
        }
        
        $post_id = $entity->getId();
        $comments = $em->getRepository('ChakoshCommentBundle:Comment')->findByPostId($post_id);        
        
        $category = $entity->getCategories();
        
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('ChakoshHomeBundle:Home:single.html.twig', array(
            'book'        => $entity,
            'category'    => $category,
            //'categories'  => $this->get_categories(),
            'comment'     => $comments,
            'comment_form'=> $comment_form->createView(),
            'delete_form' => $deleteForm->createView(),        
            ));
    }

    /**
     * Displays a form to edit an existing Book entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshBlogBundle:Book')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('کتابی یافت نشد!');
        }

        $editForm = $this->createForm(new BookType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
        
        $files = $em->getRepository('ChakoshBlogBundle:Book')->uploaded_files();
        $curent_category = $entity->getCategories();
        $category = $em->getRepository('ChakoshBlogBundle:Category')->findAll();        

        return $this->render('ChakoshHomeBundle:Admin:edit.html.twig', array(
            'book'      => $entity,
            'curent_category'    => $curent_category,
            'files'   => $files,            
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Book entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ChakoshBlogBundle:Book')->find($id);
        $cats = $em->getRepository('ChakoshBlogBundle:Category')->findAll();
        
        if (!$entity) {
            throw $this->createNotFoundException('کتابی یافت نشد!');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new BookType(), $entity);
        $editForm->bind($request);
        $new_cats = $entity->getCategories();
        if ($editForm->isValid()) {
            foreach ($cats as $old)
                $old->removeBook($entity);

            foreach ($new_cats as $NC)
                $NC->getBooks()->add($entity);
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('admin_edit', array('id' => $id)));
        }

        return $this->render('ChakoshBlogBundle:Book:edit.html.twig', array(
            'book'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Book entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ChakoshBlogBundle:Book')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('کتابی یافت نشد!');
            }
            
            $cats = $em->getRepository('ChakoshBlogBundle:Category')->findAll();
            foreach ($cats as $old)
                $old->removeBook($entity);
            
            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admin_home'));
    }

    /**
     * Creates a form to delete a Book entity by id.
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
