<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServicesPageController extends AbstractController
{
    /**
     * @Route("/services/page", name="services_page")
     */
    public function index(): Response
    {
        return $this->render('services_page/index.html.twig', [
            'controller_name' => 'ServicesPageController',
        ]);
    }
}
