<?php

use App\Superhero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $hero1 = new Superhero();
       $hero1->nickname = 'Superman';
       $hero1->real_name = 'Clark Kent';
       $hero1->origin_description = 'he was born Kal-El on the planet Krypton, before being rocketed to
                                      Earth as an infant by his scientist father Jor-El, moments before Krypton\'s destruction…';
       $hero1->superpowers = 'solar energy absorption and healing factor, solar flare and heat vision,
                              solar invulnerability, flight…';
       $hero1->catch_phrase = '“Look, up in the sky, it\'s a bird, it\'s a plane, it\'s Superman';
       $hero1->catch_phrase = '“Look, up in the sky, it\'s a bird, it\'s a plane, it\'s Superman';
       $hero1->save();

       $hero2 = new Superhero();
       $hero2->nickname = 'Superman';
       $hero2->real_name = 'Clark Kent';
       $hero2->origin_description = 'he was born Kal-El on the planet Krypton, before being rocketed to
                                    Earth as an infant by his scientist father Jor-El, moments before Krypton\'s destruction…';
       $hero2->superpowers = 'solar energy absorption and healing factor, solar flare and heat vision,
                            solar invulnerability, flight…';
       $hero2->catch_phrase = '“Look, up in the sky, it\'s a bird, it\'s a plane, it\'s Superman';
       $hero2->catch_phrase = '“Look, up in the sky, it\'s a bird, it\'s a plane, it\'s Superman';
       $hero2->save();

    }
}
