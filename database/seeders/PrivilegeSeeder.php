<?php

namespace Database\Seeders;

use App\Models\Privilege;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivilegeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $privileges = [
            
            [
                'libelle_privilege' => "administrateur",
                'description_privilege' => "L'administrateur a tous les privilèges. Il peut effectuer toutes opérations au sein de l'application"
            ],
            [
                'libelle_privilege' => "client",
                'description_privilege' => "Le client a plus de privilèges que le visiteur. il peut effectuer des opérations comme l'ajout au panier, l'achat etc..."
            ]
        ];
        Privilege::insert($privileges);
    }
}
