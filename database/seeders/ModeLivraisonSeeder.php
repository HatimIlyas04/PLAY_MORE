<?php

namespace Database\Seeders;

use App\Models\ModeLivraison;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModeLivraisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mode_livraisons = 
        [
            [
                "libelle_mode_livraison" => "Livraison standard",
                "description_mode_livraison" => "Il vous permet de recevoir votre commande sous 5 jours ouvrés. Le coût de la livraison standard est de 20 DH.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_mode_livraison" => "Livraison express",
                "description_mode_livraison" => "Il vous permet de recevoir votre commande sous 2 jours. Le coût de la livraison express est de 50 DH.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_mode_livraison" => "Retrait en magasin",
                "description_mode_livraison" => "Le retrait en magasin est gratuit et disponible sous 2 heures après la validation de votre commande.",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];

        ModeLivraison::insert($mode_livraisons);
    }
}
