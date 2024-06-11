<?php

namespace Database\Seeders;

use App\Models\Marque;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $marques = [
            [
                "libelle_marque" => "Razer",
                "description_marque" => "Marque renommée dans le domaine des périphériques gaming.",
                "image_marque" => "images/marques/razer.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Logitech",
                "description_marque" => "Fabricant de périphériques de qualité pour le gaming.",
                "image_marque" => "images/marques/Logitech.png",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Corsair",
                "description_marque" => "Marque spécialisée dans les composants et accessoires gaming.",
                "image_marque" => "images/marques/Corsair.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "SteelSeries",
                "description_marque" => "Marque réputée pour ses produits de gaming haut de gamme.",
                "image_marque" => "images/marques/SteelSeries.png",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "MSI",
                "description_marque" => "Fabricant de composants et ordinateurs gaming performants.",
                "image_marque" => "images/marques/MSI.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "ASUS",
                "description_marque" => "Marque proposant une large gamme de produits gaming.",
                "image_marque" => "images/marques/ASUS.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "HyperX",
                "description_marque" => "Marque connue pour ses casques et accessoires gaming.",
                "image_marque" => "images/marques/HyperX.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Alienware",
                "description_marque" => "Fabricant de PC gaming et d'accessoires haut de gamme.",
                "image_marque" => "images/marques/Alienware.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Kingston",
                "description_marque" => "Marque offrant des solutions de stockage performantes.",
                "image_marque" => "images/marques/Kingston.jpeg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "NVIDIA",
                "description_marque" => "Fabricant de cartes graphiques haut de gamme pour le gaming.",
                "image_marque" => "images/marques/NVIDIA.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "AMD",
                "description_marque" => "Fabricant de processeurs et cartes graphiques pour le gaming.",
                "image_marque" => "images/marques/AMD.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "AOC",
                "description_marque" => "Marque proposant des écrans gaming de qualité.",
                "image_marque" => "images/marques/AOC.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "BenQ",
                "description_marque" => "Fabricant d'écrans haute performance pour le gaming.",
                "image_marque" => "images/marques/BenQ.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Cooler Master",
                "description_marque" => "Marque spécialisée dans le refroidissement pour le gaming.",
                "image_marque" => "images/marques/Cooler_Master.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Western Digital",
                "description_marque" => "Fabricant de solutions de stockage pour le gaming.",
                "image_marque" => "images/marques/Western_Digital.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Seagate",
                "description_marque" => "Marque proposant des disques durs performants pour le gaming.",
                "image_marque" => "images/marques/Seagate.png",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Sennheiser",
                "description_marque" => "Marque de casques audio de haute qualité pour le gaming.",
                "image_marque" => "images/marques/Sennheiser.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Turtle Beach",
                "description_marque" => "Fabricant de casques gaming avec un son immersif.",
                "image_marque" => "images/marques/Turtle_Beach.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "Creative",
                "description_marque" => "Marque réputée pour ses cartes son et périphériques audio.",
                "image_marque" => "images/marques/Creative.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_marque" => "NZXT",
                "description_marque" => "Fabricant de boîtiers PC et solutions de refroidissement.",
                "image_marque" => "images/marques/NZXT.jpg",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        foreach($marques as $marque) {
            // Store the image
            $imagePath = $marque['image_marque'];
            $imageContents = file_get_contents(public_path($imagePath));
            $imageName = basename($imagePath);

            Storage::put('public/images/marques/' . $imageName, $imageContents);
        }

        Marque::insert($marques);
    }
}
