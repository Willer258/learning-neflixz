<?php

namespace App\DataFixtures;

use App\Entity\Movies;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MoviesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie1 = new Movies();
        $movie1->setName('The Shawshank Redemption');
        $movie1->setDescription('A movie of The Shawshank Redemption');
        $movie1->setTimed(120);
        $movie1->setFilePath('https://player.vimeo.com/external/480437160.sd.mp4?s=8cc88c0030d7e674a75656c8af76a0582fbc438b&profile_id=165&oauth2_token_id=57447761');
        $movie1->setCoverPath('https://images.pexels.com/photos/17928393/pexels-photo-17928393/free-photo-of-femme-smartphone-entrainer-technologie.jpeg?auto=compress&cs=tinysrgb&w=1600&lazy=load');

        
        $manager->persist($movie1);

        $movie2 = new Movies();
        $movie2->setName('The Godfather');
        $movie2->setDescription('A movie of The Godfather');
        $movie2->setTimed(180);
        $movie2->setFilePath('https://player.vimeo.com/progressive_redirect/playback/849898995/rendition/360p/file.mp4?loc=external&oauth2_token_id=57447761&signature=1a4fdba4c69c07ddc446073a351a73817ca162470f9aaf108d0fa38b055839b3');
        $movie2->setCoverPath('https://images.pexels.com/photos/2118483/pexels-photo-2118483.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');

        $manager->persist($movie2);


        $manager->flush();
    }
}
