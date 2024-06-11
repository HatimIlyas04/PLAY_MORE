<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;
use Database\Seeders\QuestionReponseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CarteBancaireSeeder::class,
            PrivilegeSeeder::class,
            VilleSeeder::class,
            UserSeeder::class,
            EtatCommandeSeeder::class,
            BoutiqueSeeder::class,
            ModeLivraisonSeeder::class,
            FournisseurSeeder::class,
            ProprieteSeeder::class,
            TagSeeder::class,
            MarqueSeeder::class,
            CategorieSeeder::class,
            ArticleSeeder::class,
            QuestionReponseSeeder::class
        ]);
    }
}
