<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        // $user = $this->getUser();

        // if ($user) {
        //     return $this->redirectToRoute('profile');
        // } else {
            return $this->render('home.html.twig');
        // }
    }
}
