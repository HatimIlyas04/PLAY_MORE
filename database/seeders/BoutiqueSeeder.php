<?php

namespace Database\Seeders;

use App\Models\Boutique;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BoutiqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $boutiques = 
        [
            [
                "libelle_boutique" => "PlayMor Casablanca",
                "adresse_boutique" => "12 rue Ibn Khaldoun, Casablanca 20000",
                "telephone_boutique" => "+212 5223-45678",
                "adresse_mail_boutique" => "casablanca@playmor.com",
                "description_boutique" => "PlayMor Casablanca est le magasin idéal pour les passionnés de gaming. Vous y trouverez un large choix de consoles, de jeux vidéo, de casques, de manettes et d'autres accessoires. Venez découvrir nos offres et promotions exclusives.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_boutique" => "PlayMor Tanger",
                "adresse_boutique" => "5 avenue Mohamed VI, Tanger 90000",
                "telephone_boutique" => "+212 5394-56789",
                "adresse_mail_boutique" => "tanger@playmor.com",
                "description_boutique" => "PlayMor Tanger est le magasin de référence pour les gamers à Tanger. Vous y trouverez tout ce dont vous avez besoin pour vivre une expérience de jeu immersive et divertissante. Nous vous proposons des consoles, des jeux vidéo, des claviers, des souris, des écrans et d'autres accessoires. Profitez de nos conseils et de notre service après-vente.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_boutique" => "PlayMor Laayoune	",
                "adresse_boutique" => "8 boulevard El Ouali, Laayoune 70000",
                "telephone_boutique" => "+212 5288-67890",
                "adresse_mail_boutique" => "laayoune@playmor.com",
                "description_boutique" => "PlayMor Laayoune est le magasin incontournable pour les amateurs de gaming à Laayoune. Vous y trouverez une sélection de consoles, de jeux vidéo, de chaises, de tapis, de haut-parleurs et d'autres accessoires. Bénéficiez de nos prix compétitifs et de notre garantie satisfait ou remboursé.",
                "created_at" => now(),
                "updated_at" => now()
            ]

        ];
        Boutique::insert($boutiques);
    }
}
