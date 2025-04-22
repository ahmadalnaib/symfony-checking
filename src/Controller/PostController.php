<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class PostController extends AbstractController
{
    #[Route('/',methods:['GET'], name: 'posts.index')]
    public function index(): Response
    {
        return $this->render('post/index.html.twig');
    }

    #[Route('/post/new', methods: ['GET','POST'], name: 'posts.new')]
    public function new(): Response
    {
        return $this->render('post/new.html.twig');
    }

    #[Route('/post/{id}', methods: ['GET'], name: 'posts.show')]
    public function show(int $id): Response
    {
        return $this->render('post/show.html.twig');
    }

    #[Route('/post/{id}/edit', methods: ['GET','POST'], name: 'posts.edit')]
    public function edit(int $id): Response
    {
        return $this->render('post/edit.html.twig');
    }
    #[Route('/post/{id}/delete', methods: ['GET','POST'], name: 'posts.delete')]
    public function delete(int $id): Response
    {
        return new Response('Post deleted');
    }

    #[Route('/posts/user/{id}', methods: ['GET'], name: 'posts.user')]
    public function user(int $id): Response
    {
        return $this->render('post/index.html.twig');
    }



    #[Route('/toggleFollow/{user}', methods: ['GET'], name: 'toggleFollow')]
    public function toggleFollow( $user): Response
    {
        return $this->render('post/toggleFollow.html.twig');
        
    }
}
