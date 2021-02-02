<?php

namespace App\Controller;

use App\Entity\Idea;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class IdeaController extends AbstractController
{
    /**
     * @Route("/idea", name="idea_list")
     */
    public function list()
    {
        $repo = $this->getDoctrine()->getRepository(Idea::class);
        $idea = $repo->findAll();
        return $this->render('/idea/list.html.twig',["idea"=>$idea]);
    }
    /**
     * @Route("/detail{id}", name="idea_detail" , requirements={"id": "\d+"})
     */
    public function detail($id)
    {
        return $this->render('/idea/detail.html.twig');
    }
}
