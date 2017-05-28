<?php
// src/AppBundle/Controller/PostController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Post;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
     * @Route("/post_data/{postId}", name="detail_post")
     */
    public function returnDataAction($postId){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Post');

        $post = $repository->find($postId);

        if(!isset($post))
        {
            return $this->render('base.html.twig');
        }

        $repository = $this->getDoctrine()->getRepository('AppBundle:User');

        $user = $repository->find($post->getPropunator());

        if(!isset($user))
        {
            return $this->render('base.html.twig');
        }


        return $this->render('Post/detail.html.twig', array(
            'categorie' => $post->getCategorie(),
            'username' =>  $user->getNume().' '.$user->getPrenume(),
            'descriere' => $post->getDescriere(),
            'scor' => $post->getScor(),
            'status' => $post->getStatus(),
        ));
    }

    /**
     * @Route("/post_data_all")
     */
    public function returnDataAllAction(){
        $repository = $this->getDoctrine()->getRepository('AppBundle:Post');

        $posts = $repository->findAll();

        return $this->render('Post/grid.html.twig', array(
            'posts' =>  $posts,
        ));
    }

    /**
     * @Route("/make_post", name="new_post")
     */
    public function makeAction(Request $request)
    {
        // 1) build the form
        $post = new Post();



        $form = $this->createFormBuilder($post)
            ->add('nume', TextType::class)
            ->add('categorie', TextType::class)
            ->add('descriere', TextType::class)
            ->getForm();

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 4) save the User!

            $user = $this->getUser();
            $userId = $user->getId();

            $post->setPropunator($userId);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('homepage');
        }

        return $this->render(
            'Post/make.html.twig',
            array('form' => $form->createView())
        );

        // return $this->render('posts/make.html.twig');
    }

    /**
     * @Route("/get_post")
     */
    public function getDataAction()
    {
        $post = new Post();


        $post->setNume($this->get('request')->request->get('nume'));
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

}