<?php

namespace Database\Seeders;

use App\Models\Fournisseur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fournisseurs = [
            [
                "nom_fournisseur" => "GameTech",
                "adresse_email_fournisseur" => "gametech@email.com",
                "telephone_fournisseur" => "+1234567890",
                "adresse_fournisseur" => "123 Main Street",
                "description_fournisseur" => "Fournisseur de matériel de gaming de haute qualité.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "PowerPlay",
                "adresse_email_fournisseur" => "powerplay@email.com",
                "telephone_fournisseur" => "+0987654321",
                "adresse_fournisseur" => "456 Park Avenue",
                "description_fournisseur" => "Fournisseur d'accessoires de gaming innovants.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "EliteGaming",
                "adresse_email_fournisseur" => "elitegaming@email.com",
                "telephone_fournisseur" => "+9876543210",
                "adresse_fournisseur" => "789 Oak Road",
                "description_fournisseur" => "Spécialiste des composants haut de gamme pour le gaming.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "TechZone",
                "adresse_email_fournisseur" => "techzone@email.com",
                "telephone_fournisseur" => "+1357924680",
                "adresse_fournisseur" => "321 Elm Court",
                "description_fournisseur" => "Fournisseur de produits électroniques pour gamers.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "MegaGear",
                "adresse_email_fournisseur" => "megagear@email.com",
                "telephone_fournisseur" => "+2468135790",
                "adresse_fournisseur" => "654 Pine Lane",
                "description_fournisseur" => "Propose une large gamme d'accessoires de gaming.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "GameMaster",
                "adresse_email_fournisseur" => "gamemaster@email.com",
                "telephone_fournisseur" => "+8642097531",
                "adresse_fournisseur" => "987 Cedar Avenue",
                "description_fournisseur" => "Fournisseur de consoles et jeux vidéo de renommée.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "PlayNation",
                "adresse_email_fournisseur" => "playnation@email.com",
                "telephone_fournisseur" => "+2143658709",
                "adresse_fournisseur" => "963 Cedar Road",
                "description_fournisseur" => "Propose des consoles, jeux et accessoires de gaming.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "ProTech",
                "adresse_email_fournisseur" => "protech@email.com",
                "telephone_fournisseur" => "+9513574862",
                "adresse_fournisseur" => "159 Maple Street",
                "description_fournisseur" => "Fournisseur d'équipements de gaming professionnels.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "SpeedGear",
                "adresse_email_fournisseur" => "speedgear@email.com",
                "telephone_fournisseur" => "+7412589630",
                "adresse_fournisseur" => "753 Oak Street",
                "description_fournisseur" => "Spécialisé dans les périphériques de gaming performants.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "nom_fournisseur" => "MegaByte",
                "adresse_email_fournisseur" => "megabyte@email.com",
                "telephone_fournisseur" => "+3698521470",
                "adresse_fournisseur" => "852 Elm Avenue",
                "description_fournisseur" => "Offre des solutions de stockage pour les gamers.",
                "created_at" => now(),
                "updated_at" => now()
            ]

        ];
    Fournisseur::insert($fournisseurs);
    }
}
