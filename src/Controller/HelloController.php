<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController
{
    #[Route('/', name: 'hello')]
    public function index(): Response
    {
        return $this->render('base.html.twig', [
            'name' => 'name',
        ]);
    }
   

    #[Route('/{id}', name: 'hello_id')]
    public function showOne($id): Response
    {
        return $this->render('hello/show_one.html.twig', [
            'id' => $id,
        ]);
        // return new Response('Hallo ' . $id);
    }
}