<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $catégories = [
            [
                "nom_categorie" => "Claviers",
                "description_categorie" => "Claviers de gaming avec des fonctionnalités avancées.",
                "image_categorie" => "images/categories/claviers.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Souris",
                "description_categorie" => "Souris de gaming ergonomiques et haute performance.",
                "image_categorie" => "images/categories/souris.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Casques",
                "description_categorie" => "Casques audio pour une expérience de jeu immersive.",
                "image_categorie" => "images/categories/casques.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Audio",
                "description_categorie" => "Systèmes audio de haute qualité pour le gaming.",
                "image_categorie" => "images/categories/audio.jpeg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Manettes",
                "description_categorie" => "Manettes de jeu compatibles avec différentes plateformes.",
                "image_categorie" => "images/categories/manettes.jpeg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Sacs et rangement",
                "description_categorie" => "Sacs à dos et rangement pour le transport de matériel.",
                "image_categorie" => "images/categories/sacs_et_rangement.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Écrans",
                "description_categorie" => "Écrans de gaming avec des taux de rafraîchissement élevés.",
                "image_categorie" => "images/categories/écrans.jpeg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Cartes graphiques",
                "description_categorie" => "Cartes graphiques puissantes pour des graphismes de qualité.",
                "image_categorie" => "images/categories/cartes_graphiques.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Processeurs",
                "description_categorie" => "Processeurs performants pour une expérience fluide.",
                "image_categorie" => "images/categories/processeurs.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Mémoires",
                "description_categorie" => "Mémoires RAM rapides pour des performances optimales.",
                "image_categorie" => "images/categories/mémoires.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Stockage",
                "description_categorie" => "Solutions de stockage haute performance pour les jeux.",
                "image_categorie" => "images/categories/stockage.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Alimentations",
                "description_categorie" => "Alimentations fiables et efficaces pour les PC de gaming.",
                "image_categorie" => "images/categories/alimentation.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Refroidissement",
                "description_categorie" => "Solutions de refroidissement pour des températures basses.",
                "image_categorie" => "images/categories/refroidissement.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Accessoires",
                "description_categorie" => "Accessoires variés pour améliorer l'expérience de jeu.",
                "image_categorie" => "images/categories/accessoires.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Éclairage",
                "description_categorie" => "Éclairage personnalisé pour une ambiance de jeu immersive.",
                "image_categorie" => "images/categories/éclairage.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_categorie" => "Mobilier",
                "description_categorie" => "Mobilier gaming confortable et ergonomique.",
                "image_categorie" => "images/categories/mobilier.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        foreach($catégories as $catégorie) {
            // Store the image
            $imagePath = $catégorie['image_categorie'];
            $imageContents = file_get_contents(public_path($imagePath));
            $imageName = basename($imagePath);

            Storage::put('public/images/categories/' . $imageName, $imageContents);
        }

        Categorie::insert($catégories);
    }
}
