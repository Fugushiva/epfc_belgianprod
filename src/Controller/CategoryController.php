<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(EntityManagerInterface $em): Response
    {
        $repository = $em->getRepository(Category::class);
        $category = $repository->findAll(); 

        return $this->render('category/index.html.twig', [
            'title' => 'Catégorie des films',
            'categories' => $category,
        ]);
    }

    #[Route('/category/{id}', name: 'app_category_show')]
    public function show(EntityManagerInterface $em, int $id): Response
    {
        $repository = $em->getRepository(Category::class);
        $category = $repository->find($id);
        

        return $this->render('category/show.html.twig', [
            'title' => 'Catégorie des films',
            'category' => $category,
        ]);
    }


}
