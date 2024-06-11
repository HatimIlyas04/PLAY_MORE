<?php

namespace Database\Seeders;

use App\Models\EtatCommande;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EtatCommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etat_commandes = [
            
           
            [
                "libelle_etat_commande" => "En cours",
                "description_etat_commande" => "La commande est en train d'être préparée, emballée ou expédiée par le vendeur.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_etat_commande" => "Livrée",
                "description_etat_commande" => "La commande a été livrée au client ou à un point de retrait.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "libelle_etat_commande" => "Annulée",
                "description_etat_commande" => "La commande a été annulée par le client ou le vendeur avant son expédition.",
                "created_at" => now(),
                "updated_at" => now()
            ],
            
        ];
        EtatCommande::insert($etat_commandes);
    }
}
