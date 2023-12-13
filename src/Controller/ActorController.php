<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Actor;
use Doctrine\ORM\Mapping\Entity;

class ActorController extends AbstractController
{
    #[Route('/actor', name: 'app_actor')]
    public function index(EntityManagerInterface $em): Response
    {
        $actorRepository = $em->getRepository(Actor::class);
        $actors = $actorRepository->findAll();
        return $this->render('actor/index.html.twig', [
            'controller_name' => 'ActorController',
            'actors' => $actors
        ]);
    }

 

    
}
