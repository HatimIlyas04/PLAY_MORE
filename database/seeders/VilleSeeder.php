<?php

namespace Database\Seeders;

use App\Models\Ville;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VilleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $villes = [
            [
                "libelle_ville" => "casablanca",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "fès",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "meknès",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "rabat",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "agadir",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "al hoceima",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "beni mellal",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "el jadida",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "essaouira",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "guelmim",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "kenitra",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "khamisset",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "khénifra",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "khouribga",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "laâyoune",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "larache",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "ouarzazate",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "oujda",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "safi",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "salé",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_ville" => "tanger",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        Ville::insert($villes);
    }
}
