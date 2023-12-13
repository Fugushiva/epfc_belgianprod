<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $data = [
            ['name' => "Drame"],
            ['name' => 'Aventure'],
            ['name' => 'Comédie'],
            ['name' => 'Romance'],
            ['name' => 'Horreur'],
        ];

        foreach($data as $row){
            $category = new Category();
            $category->setName($row['name']);
            $manager->persist($category);
        }

    

        $manager->flush();
    }
}
