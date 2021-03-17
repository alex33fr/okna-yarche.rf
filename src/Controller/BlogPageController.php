<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogPageController extends AbstractController
{
    /**
     * @Route("/blog/page", name="blog_page")
     */
    public function index(): Response
    {
        return $this->render('blog_page/index.html.twig', [
            'controller_name' => 'BlogPageController',
        ]);
    }
}
