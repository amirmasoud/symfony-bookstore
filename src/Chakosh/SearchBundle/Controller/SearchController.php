<?php

namespace Chakosh\SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller 
{
    /**
     * show searchform
     * 
     * @return searchform.twig
     */
    public function searchformAction() { return $this->render('ChakoshHomeBundle:Base:searchform.html.twig'); }
    
    public function searchtempAction(Request $request)
    {
                       
        $q = $request->query->get('q');
        $fields = array('name','author','content');
        
        $em = $this->getDoctrine()->getManager();
        //search on name field
        $found = array();
        $query = $em->createQuery(
                        sprintf(
                        'SELECT b FROM 
                         ChakoshBlogBundle:Book b 
                         WHERE b.%s 
                         LIKE :q 
                         ORDER BY b.name ASC'
                                ,$fields[0])
                )
                ->setParameter('q','%' . $q . '%');
        $name = $query->getResult();
        foreach($name as $n)
            $found[] = $n->getId();
        $found = array_unique($found);
        
        //$name = $this->createForm(new BookType(), $name);
        //search on author
        $query = $em->createQuery(
                        sprintf(
                        'SELECT b FROM 
                         ChakoshBlogBundle:Book b 
                         WHERE b.%s 
                         LIKE :q 
                         ORDER BY b.author ASC'
                                ,$fields[1])
                )
                ->setParameter('q','%' . $q . '%');
        $author = $query->getResult();
        foreach($author as $a)
            $found[] = $a->getId();
        $found = array_unique($found);
        //search on content
        $query = $em->createQuery(
                        sprintf(
                        'SELECT b FROM 
                         ChakoshBlogBundle:Book b 
                         WHERE b.%s 
                         LIKE :q 
                         ORDER BY b.content ASC'
                                ,$fields[2])
                )
                ->setParameter('q','%' . $q . '%');
        $content = $query->getResult();
        foreach($content as $c)
            $found[] = $c->getId();
        if($found)
        {
            $found = array_unique($found);
            $entity = "";
            $i =0;
            $name = array();            
            foreach($found as $f)
            {
                $entity = $em->getRepository('ChakoshBlogBundle:Book')->findById($f);
                foreach($entity as $e)
                    $name[] = $e->getName() . "<br />";
            }
            print_r($name);
            $return=array("responseCode"=>200,'name'=>$name);
            $return=json_encode($return);//jscon encode the array
            return new Response($return,200,array('Content-Type'=>'application/json'));//make sure it has the correct content type        
        }
        else
        {
            $return=array("responseCode"=>400);
            $return=json_encode($return);//jscon encode the array
            return new Response($return,400,array('Content-Type'=>'application/json'));
        }
        /*
        return $this->render('ChakoshHomeBundle:Base:searchresult.html.twig',array(
                            'name'=>$name,
                            'author'=>$author,
                            'content'=>$content
                ));
         * 
         */
    }    
    public function searchAction(Request $request)
    {
        $q = $request->query->get('q');
        $fields = array('name','author','content');
        $em = $this->getDoctrine()->getManager();
        $found = array();
        foreach ($fields as $F)
        {
            $query = $em->createQuery(
                            sprintf(
                            'SELECT b FROM 
                             ChakoshBlogBundle:Book b 
                             WHERE b.%s 
                             LIKE :q 
                             ORDER BY b.%s ASC'
                                    ,$F,$F)
                    )
                    ->setParameter('q','%' . $q . '%');
            $result = $query->getResult();           
            if($result)
            {
                foreach($result as $R)
                    $found[] = $R->getId();
                $found = array_unique($found);            
            }            
        }
        
        if($found)
        {
            $found = array_unique($found);
            $result = array();
            foreach($found as $f)
            {
                $entity = $em->getRepository('ChakoshBlogBundle:Book')->findById($f);
                foreach($entity as $e)
                    $result[] = $e;
            }
        $options = $this->get('options');
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $result,
            $this->get('request')->query->get('page',1)/*page number*/,
            $options->getOption('posts_per_page')
        );            
        return $this->render('ChakoshHomeBundle:Home:searchresult.html.twig',array(
                            'entities'=>$pagination,
                            'query'=>$q,
                ));
        }
        else
        {
        return $this->render('ChakoshHomeBundle:Home:noresult.html.twig',array(
                            'mess'=>'جستجو نتیجه ای نداشت'
                ));        
        }        
    }
    public function  availableTagsAction()
    {
        $em    = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('ChakoshBlogBundle:Book')->findAll();
        
        $tags = "";
        foreach ($entity as $e)
        {
            $tags .= $e->getName() . ",";
        }
        return new Response($tags);
    }
}
