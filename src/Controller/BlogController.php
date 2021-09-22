<?php
// src/Controller/BlogController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
        /**
     * @Route("/blog/{id}", name="blog_listaaa", requirements={"id"="\d+"})
     */
    public function list(int $id=1): Response
    {
        $number = $id;

        return $this->render('number1.html.twig', [
            'number' => $number,
        ]);
    }

     /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show(string $slug): Response
    {
        $number = $slug;

        return $this->render('number1.html.twig', [
            'number' => $number,
        ]);
    }
}