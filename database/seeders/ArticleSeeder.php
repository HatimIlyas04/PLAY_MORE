<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                "designation_article" => "Clavier gaming RGB",
                "description_article" => "Clavier mécanique rétroéclairé avec plusieurs modes RGB.",
                "image_article" => "images/articles/Clavier_gaming_RGB.jpg",
                "prix_article" => 500.00,
                "taux_remise" => 0.1,
                "taux_tva" => 0.2,
                "quantite_stock" => 100,
                "seuil_stock" => 10,
                "fournisseur_id" => 1,
                "marque_id" => 1,
                "categorie_id" => 1,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Souris sans fil",
                "description_article" => "Souris optique sans fil avec récepteur USB.",
                "image_article" => "images/articles/Souris_sans_fil.jpg",
                "prix_article" => 200.00,
                "taux_remise" => 0.05,
                "taux_tva" => 0.2,
                "quantite_stock" => 50,
                "seuil_stock" => 10,
                "fournisseur_id" => 2,
                "marque_id" => 2,
                "categorie_id" => 2,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Casque gaming surround",
                "description_article" => "Casque audio avec son surround et microphone intégré.",
                "image_article" => "images/articles/Casque_gaming_surround.jpg",
                "prix_article" => 800.00,
                "taux_remise" => 0.15,
                "taux_tva" => 0.2,
                "quantite_stock" => 30,
                "seuil_stock" => 10,
                "fournisseur_id" => 3,
                "marque_id" => 3,
                "categorie_id" => 3,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Manette de jeu",
                "description_article" => "Manette de jeu sans fil pour PC et consoles.",
                "image_article" => "images/articles/Manette_de_jeu.jpg",
                "prix_article" => 300,
                "taux_remise" => 0.1,
                "taux_tva" => 0.2,
                "quantite_stock" => 80,
                "seuil_stock" => 10,
                "fournisseur_id" => 4,
                "marque_id" => 4,
                "categorie_id" => 5,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Écran 27 pouces",
                "description_article" => "Écran gaming de 27 pouces avec taux de rafraîchissement élevé.",
                "image_article" => "images/articles/Écran_27_pouces.jpg",
                "prix_article" => 2000.00,
                "taux_remise" => 0.2,
                "taux_tva" => 0.2,
                "quantite_stock" => 20,
                "seuil_stock" => 10,
                "fournisseur_id" => 5,
                "marque_id" => 5,
                "categorie_id" => 7,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Carte graphique GTX 3080",
                "description_article" => "Carte graphique haut de gamme pour des performances exceptionnelles.",
                "image_article" => "images/articles/Carte_graphique_GTX_3080.jpg",
                "prix_article" => 8000.00,
                "taux_remise" => 0,
                "taux_tva" => 0.2,
                "quantite_stock" => 10,
                "seuil_stock" => 10,
                "fournisseur_id" => 6,
                "marque_id" => 6,
                "categorie_id" => 8,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Processeur Ryzen 9",
                "description_article" => "Processeur puissant pour une expérience de jeu fluide.",
                "image_article" => "images/articles/Processeur_Ryzen_9.jpeg",
                "prix_article" => 5000.00,
                "taux_remise" => 0.1,
                "taux_tva" => 0.2,
                "quantite_stock" => 15,
                "seuil_stock" => 10,
                "fournisseur_id" => 7,
                "marque_id" => 7,
                "categorie_id" => 9,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Mémoire RAM DDR4 16 Go",
                "description_article" => "Mémoire RAM rapide et fiable pour des performances optimales.",
                "image_article" => "images/articles/Mémoire_RAM_DDR4_16_Go.jpeg",
                "prix_article" => 1000.00,
                "taux_remise" => 0.05,
                "taux_tva" => 0.2,
                "quantite_stock" => 50,
                "seuil_stock" => 10,
                "fournisseur_id" => 8,
                "marque_id" => 8,
                "categorie_id" => 10,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "SSD 1 To",
                "description_article" => "Disque SSD haute performance pour un stockage rapide.",
                "image_article" => "images/articles/SSD_1_To.jpg",
                "prix_article" => 1500.00,
                "taux_remise" => 0.1,
                "taux_tva" => 0.2,
                "quantite_stock" => 30,
                "seuil_stock" => 10,
                "fournisseur_id" => 9,
                "marque_id" => 9,
                "categorie_id" => 11,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Alimentation 750W",
                "description_article" => "Alimentation efficace et stable pour les PC de gaming.",
                "image_article" => "images/articles/Alimentation_750W.jpeg",
                "prix_article" => 700.00,
                "taux_remise" => 0.05,
                "taux_tva" => 0.2,
                "quantite_stock" => 0.2,
                "seuil_stock" => 10,
                "fournisseur_id" => 10,
                "marque_id" => 10,
                "categorie_id" => 12,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Ventilateur de CPU",
                "description_article" => "Ventilateur de refroidissement pour le processeur.",
                "image_article" => "images/articles/Ventilateur_de_CPU.jpg",
                "prix_article" => 200.00,
                "taux_remise" => 0,
                "taux_tva" => 0.2,
                "quantite_stock" => 100,
                "seuil_stock" => 10,
                "fournisseur_id" => 1,
                "marque_id" => 1,
                "categorie_id" => 13,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Tapis de souris XL",
                "description_article" => "Tapis de souris grande taille avec surface lisse.",
                "image_article" => "images/articles/Tapis_de_souris_XL.jpg",
                "prix_article" => 100.00,
                "taux_remise" => 0,
                "taux_tva" => 0.2,
                "quantite_stock" => 200,
                "seuil_stock" => 10,
                "fournisseur_id" => 2,
                "marque_id" => 2,
                "categorie_id" => 14,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Microphone USB",
                "description_article" => "Microphone USB de haute qualité pour les streams et enregistrements.",
                "image_article" => "images/articles/Microphone_USB.jpg",
                "prix_article" => 300.00,
                "taux_remise" => 0.05,
                "taux_tva" => 0.2,
                "quantite_stock" => 50,
                "seuil_stock" => 10,
                "fournisseur_id" => 3,
                "marque_id" => 3,
                "categorie_id" => 4,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Webcam HD 1080p",
                "description_article" => "Webcam haute définition pour les vidéos et les visioconférences.",
                "image_article" => "images/articles/Webcam_HD_1080p.jpg",
                "prix_article" => 500.00,
                "taux_remise" => 0.1,
                "taux_tva" => 0.2,
                "quantite_stock" => 20,
                "seuil_stock" => 10,
                "fournisseur_id" => 4,
                "marque_id" => 14,
                "categorie_id" => 14,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Volant de course",
                "description_article" => "Volant de course pour les jeux de course automobile.",
                "image_article" => "images/articles/Volant_de_course.jpg",
                "prix_article" => 1000.00,
                "taux_remise" => 0.1,
                "taux_tva" => 0.2,
                "quantite_stock" => 20,
                "seuil_stock" => 10,
                "fournisseur_id" => 5,
                "marque_id" => 15,
                "categorie_id" => 14,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Routeur gaming",
                "description_article" => "Routeur haute performance pour une connexion gaming optimale.",
                "image_article" => "images/articles/Routeur_gaming.jpg",
                "prix_article" => 1500.00,
                "taux_remise" => 0,
                "taux_tva" => 0.2,
                "quantite_stock" => 15,
                "seuil_stock" => 10,
                "fournisseur_id" => 6,
                "marque_id" => 16,
                "categorie_id" => 14,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "designation_article" => "Sac à dos gamer",
                "description_article" => "Sac à dos spacieux pour le transport de matériel gaming.",
                "image_article" => "images/articles/Sac_à_dos_gamer.jpg",
                "prix_article" => 200,
                "taux_remise" => 0,
                "taux_tva" => 0.2,
                "quantite_stock" => 50,
                "seuil_stock" => 10,
                "fournisseur_id" => 7,
                "marque_id" => 17,
                "categorie_id" => 6,
                "created_at" => now(),
                "updated_at" => now()
            ]
            
        ];

        foreach($articles as $article) {
            // Store the image
            $imagePath = $article['image_article'];
            $imageContents = file_get_contents(public_path($imagePath));
            $imageName = basename($imagePath);

            Storage::put('public/images/articles/' . $imageName, $imageContents);
        }
        
        Article::insert($articles);
    }
}
