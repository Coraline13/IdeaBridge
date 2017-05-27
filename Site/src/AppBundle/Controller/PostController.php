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

        return new Response('Saved new post with id '.$post->getId());
    }
}