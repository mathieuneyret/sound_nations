<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypemembreController extends AbstractController
{
    /**
     * @Route("/typemembre", name="typemembre")
     */
    public function index(): Response
    {
        return $this->render('typemembre/index.html.twig', [
            'controller_name' => 'TypemembreController',
        ]);
    }
}
