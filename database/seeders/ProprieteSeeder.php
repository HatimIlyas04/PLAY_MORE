<?php

namespace Database\Seeders;

use App\Models\Propriete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProprieteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proprietes = [
            [
                "libelle_propriete" => "Couleur",
                "description_propriete" => "Permet de choisir parmi différentes couleurs.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Poids",
                "description_propriete" => "Indique le poids du produit en grammes.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Dimensions",
                "description_propriete" => "Les dimensions physiques du produit.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Rétroéclairage",
                "description_propriete" => "Présence d'un rétroéclairage personnalisable.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Matériau",
                "description_propriete" => "Matériau utilisé pour la fabrication du produit.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Connectivité",
                "description_propriete" => "Types de connectivité supportés (USB, Bluetooth, etc.).",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Sensibilité",
                "description_propriete" => "Sensibilité réglable pour les souris.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Capacité de stockage",
                "description_propriete" => "Capacité de stockage interne du produit.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Type de clavier",
                "description_propriete" => "Type de clavier (mécanique, à membrane, etc.).",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Compatibilité",
                "description_propriete" => "Compatibilité avec les différentes plateformes.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Fréquence d'échantillonnage",
                "description_propriete" => "Fréquence d'échantillonnage pour les casques audio.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Puissance",
                "description_propriete" => "Puissance de sortie pour les haut-parleurs.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Temps de réponse",
                "description_propriete" => "Temps de réponse pour les écrans et les claviers.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Nombre de boutons",
                "description_propriete" => "Nombre total de boutons sur une manette de jeu.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Résolution",
                "description_propriete" => "Résolution d'affichage pour les écrans.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Type de câble",
                "description_propriete" => "Type de câble utilisé pour la connectivité.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Style",
                "description_propriete" => "Style de design du produit.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Effets sonores",
                "description_propriete" => "Présence d'effets sonores immersifs.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Autonomie",
                "description_propriete" => "Durée d'autonomie de la batterie.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_propriete" => "Fréquence de rafraîchissement",
                "description_propriete" => "Fréquence de rafraîchissement de l'écran.",
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];
        Propriete::insert($proprietes);
    }
}
