<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TypepassController extends AbstractController
{
    /**
     * @Route("/typepass", name="typepass")
     */
    public function index(): Response
    {
        return $this->render('typepass/index.html.twig', [
            'controller_name' => 'TypepassController',
        ]);
    }
}
