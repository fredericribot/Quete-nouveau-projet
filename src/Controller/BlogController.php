<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;


class BlogController extends AbstractController
{
    /**
     * @Route("/Blog", name="Blog_index")
     */
    public function index()
    {
        return $this->render('index.html.twig', [
            'owner' => 'Thomas',
        ]);
    }
}
