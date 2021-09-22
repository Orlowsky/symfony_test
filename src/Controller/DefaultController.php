<?php
// src/Controller/DefaultController.php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends AbstractController
{
      /**
     * @Route("/", name="pusta")
     */
    public function index(): Response
    {
        $number = "elo";

        return $this->render('number.html.twig', [
            'number' => $number,
        ]);
    }
}