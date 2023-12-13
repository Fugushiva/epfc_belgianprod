<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $data = [
            [
                "title" => "Die HArd",
                'slug' => 'die-hard',
                "description" => "Action movie in a tower",
                "duration" =>120,
            ],
        ];

        foreach($data as $row){
            $movie = new Movie();
            $movie->setTitle($row["title"]);
            $movie->setDescription($row["description"]);
            $movie->setDuration($row["duration"]);
            $movie->setSlug($row['slug']);
          
        
            $manager->persist($movie);
        }
        $manager->flush();
    }
}
