<?php
// src/AppBundle/Controller/PostController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PostController extends Controller
{
    /**
     * @Route("/post")
     */
    public function createAction()
    {
        $post = new Post();
        $post->setNume('Mihai');
        $post->setCategorie('Renovare');
        $post->setPropunator('23456');
        $post->setDescriere('Ergonomic and stylish!');
        $post->setLocatie('Pe strada');
        $post->setStatus('pending');
        $post->setScor('100');

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($post);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();

        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/post_data/{postId}")
     */
    public function returnData($postId){


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