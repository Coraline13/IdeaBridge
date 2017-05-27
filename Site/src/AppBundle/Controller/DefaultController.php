<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Document;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $usr = $this->get('security.token_storage')->getToken()->getUser();

        $post = array('nume' => 'Idee', 'status' => 'Acceptat', 'scor' => 12);

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'user' => $usr,
            'item' => $this->returnData(1),
            'post' => $post,
        ]);
    }

    /**
     * @Template()
     * @Route("/", name="homepage")
     */
    public function uploadAction()
    {
        $document = new Document();
        $form = $this->createFormBuilder($document)
            ->add('name')
            ->add('file')
            ->getForm()
        ;

        if ($this->getRequest()->isMethod('POST')) {
            $form->bind($this->getRequest());
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();

                $em->persist($document);
                $em->flush();

                return $this->redirectToRoute('homepage');
            }
        }

        return array('form' => $form->createView());
    }

    private function returnData($postId){


        $post = $this->getDoctrine()
            ->getRepository('AppBundle:Post')
            ->find($postId);

        if (!$post) {
            throw $this->createNotFoundException(
                'No product found for id '.$postId
            );
        }

        return $this->render('Post/base.html.twig', array(
            'post' => $post,
        ));
    }
}
