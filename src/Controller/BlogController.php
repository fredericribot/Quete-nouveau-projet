<?php

namespace App\Controller;


use Symfony\Component\Routing\Annotation\Route;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;


class BlogController extends AbstractController
{
    /**
     * @Route("/Blog/show", name="Blog_index")
     */

    public function index()
    {
        return $this->render('index.html.twig', [
            'owner' => 'Thomas',
        ]);
    }
      /**
     * @Route("/blog/show/{page}",
     * requirements={"page"="[a-z0-9\-]+"},
     * defaults = {"page":"mon-super-article"},
     * name="blog_show")
     */

    public function show($page)
    {
       $page = ucwords(str_replace('-',' ',$page));
        
        return $this->render('show.html.twig' , ['page'=> $page]);

    
    }


}
