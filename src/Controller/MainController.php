<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main/AboutUs", name="main_AboutUs")
     */
    public function about_us(): Response
    {
        return $this->render('main/AboutUs.html.twig', []);
    }
}
