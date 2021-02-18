<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypemusicalController extends AbstractController
{
    /**
     * @Route("/typemusical", name="typemusical")
     */
    public function index(): Response
    {
        return $this->render('typemusical/index.html.twig', [
            'controller_name' => 'TypemusicalController',
        ]);
    }
}
