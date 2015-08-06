<?php

namespace Chakosh\UploadBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Chakosh\UploadBundle\Entity\Upload;

class UploadController extends Controller
{
    
    private function getFiles(){
        $obj = new Upload();
        $UploadRootDir = $obj->getUploadRootDir();
        $files = array();
        if ($handle = opendir($UploadRootDir)) {
            /* This is the correct way to loop over the directory. */
            while (false !== ($entry = readdir($handle))) 
            {
                if($entry != "." && $entry != "..")
                {
                    $files[] = $entry;
                }
            }
            closedir($handle);
        }
        $files = array_reverse($files);
        return $files;
    }
    /*
     * 
     * @retuen Modal
     */
    public function modalShowAction(){
        $files = $this->getFiles();
        return $this->render('ChakoshHomeBundle:Admin:Modal.html.twig',array(
            'files' => $files,
        ));
    }    
    
    
    function showAction()
    {
        $files = $this->getFiles();
        return $this->render('ChakoshUploadBundle:Default:show.html.twig',array(
            'files' => $files,
        ));        
    }
    public function uploadAction(Request $request)
    {
        
        $request = $this->container->get('request');        
        $data1 = $request->query->get('file');
        //$data2 = $request->query->get('data2');

        $document = new Upload();
        $form = $this->createFormBuilder($document)
            ->add('file')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
                $document->Upload();
                
                //prepare the response, e.g.
                //$response = array("code" => 100, "success" => true);
                //you can return result as JSON
                //return new Response(json_encode($response));                 
                
                
                $response = new Response();
                
                
                $response->setContent('<html><body><h1>Hello world!</h1></body></html>');
                $response->setStatusCode(200);
                $response->headers->set('Content-Type', 'text/html');
                
                $response->send();
                
                //you can return result as JSON
                //return new Response(json_encode($response)); 
                //return new Response($this->generateUrl('chakosh_upload_homepage'));         
                //return new Response($this->redirect($this->generateUrl('chakosh_upload_homepage')));
        }

        return $this->render('ChakoshUploadBundle:Default:index.html.twig',array(
                                                                    'form' => $form->createView()
                                                                    ));        
    }
}
