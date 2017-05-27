<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $usr->getUsername();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
            'user' => $usr,
            'item' => $this->returnData(1),
        ]);
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
