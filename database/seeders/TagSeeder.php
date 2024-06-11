<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
                "libelle_tag" => "Clavier",
                "designation_tag" => "Accessoire de gaming - Clavier",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Souris",
                "designation_tag" => "Accessoire de gaming - Souris",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Casque",
                "designation_tag" => "Accessoire de gaming - Casque",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Manette",
                "designation_tag" => "Accessoire de gaming - Manette",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Écran",
                "designation_tag" => "Matériel de gaming - Écran",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Carte graphique",
                "designation_tag" => "Matériel de gaming - Carte graphique",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Processeur",
                "designation_tag" => "Matériel de gaming - Processeur",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Mémoire",
                "designation_tag" => "Matériel de gaming - Mémoire",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Stockage",
                "designation_tag" => "Matériel de gaming - Stockage",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Alimentation",
                "designation_tag" => "Matériel de gaming - Alimentation",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Refroidissement",
                "designation_tag" => "Matériel de gaming - Refroidissement",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Tapis de souris",
                "designation_tag" => "Accessoire de gaming - Tapis de souris",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Microphone",
                "designation_tag" => "Accessoire de gaming - Microphone",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Webcam",
                "designation_tag" => "Accessoire de gaming - Webcam",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Haut-parleurs",
                "designation_tag" => "Accessoire de gaming - Haut-parleurs",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Volant",
                "designation_tag" => "Accessoire de gaming - Volant",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Tablette",
                "designation_tag" => "Accessoire de gaming - Tablette graphique",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Câbles",
                "designation_tag" => "Accessoire de gaming - Câbles",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Éclairage",
                "designation_tag" => "Accessoire de gaming - Éclairage",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_tag" => "Sac à dos",
                "designation_tag" => "Accessoire de gaming - Sac à dos",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        Tag::insert($tags);
    }
}
