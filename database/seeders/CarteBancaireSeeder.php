<?php

namespace Database\Seeders;

use App\Models\CarteBancaire;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarteBancaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // We have used the the Hash's make method in order to hash the validation code card
        $carte_bancaires = [
            [
                "numero_carte_bancaire" => "4929 1234 5678 9012",
                "date_expiration_carte_bancaire" => "2023-12-1",
                "code_validation_carte_bancaire" => Hash::make("123"),
                "solde_carte_bancaire" => 10000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "4539 8765 4321 0987",
                "date_expiration_carte_bancaire" => "2024-01-01",
                "code_validation_carte_bancaire" => Hash::make("456"),
                "solde_carte_bancaire" => 500000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "4024 0071 2345 6789",
                "date_expiration_carte_bancaire" => "2025-06-01",
                "code_validation_carte_bancaire" =>  Hash::make("789"),
                "solde_carte_bancaire" => 20000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "4716 5432 1098 7654",
                "date_expiration_carte_bancaire" => "2026-11-01",
                "code_validation_carte_bancaire" =>  Hash::make("147"),
                "solde_carte_bancaire" => -1000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "6011 1111 2222 3333",
                "date_expiration_carte_bancaire" => "2027-03-01",
                "code_validation_carte_bancaire" =>  Hash::make("258"),
                "solde_carte_bancaire" => -5000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "6011 4444 5555 6666",
                "date_expiration_carte_bancaire" => "2028-07-01",
                "code_validation_carte_bancaire" =>  Hash::make("369"),
                "solde_carte_bancaire" => -20000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "6011 7777 8888 9999",
                "date_expiration_carte_bancaire" => "2029-10-01",
                "code_validation_carte_bancaire" =>  Hash::make("159"),
                "solde_carte_bancaire" => 30000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5105 1051 0510 5100",
                "date_expiration_carte_bancaire" => "2030-02-01",
                "code_validation_carte_bancaire" =>  Hash::make("753"),
                "solde_carte_bancaire" => 40000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5204 2042 0420 4200",
                "date_expiration_carte_bancaire" => "2031-05-01",
                "code_validation_carte_bancaire" =>  Hash::make("951"),
                "solde_carte_bancaire" => 50000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5303 3033 0330 3300",
                "date_expiration_carte_bancaire" => "2032-09-01",
                "code_validation_carte_bancaire" =>  Hash::make("456"),
                "solde_carte_bancaire" => 600000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5402-4024-0240-2400",
                "date_expiration_carte_bancaire" => "2033-01-01",
                "code_validation_carte_bancaire" =>  Hash::make("852"),
                "solde_carte_bancaire" => 70000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5501-5015-0150-1500",
                "date_expiration_carte_bancaire" => "2034-08-01",
                "code_validation_carte_bancaire" =>  Hash::make("159"),
                "solde_carte_bancaire" => 80000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5606-6066-0660-6600",
                "date_expiration_carte_bancaire" => "2025-01-01",
                "code_validation_carte_bancaire" =>  Hash::make("159"),
                "solde_carte_bancaire" => 90000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5707-7077-0770-7700",
                "date_expiration_carte_bancaire" => "2036-01-11",
                "code_validation_carte_bancaire" =>  Hash::make("951"),
                "solde_carte_bancaire" => 100000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5808-8088-0880-8800",
                "date_expiration_carte_bancaire" => "2037-02-01",
                "code_validation_carte_bancaire" =>  Hash::make("356"),
                "solde_carte_bancaire" => 1200000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "5909-9099-0990-9900",
                "date_expiration_carte_bancaire" => "2038-06-01",
                "code_validation_carte_bancaire" =>  Hash::make("362"),
                "solde_carte_bancaire" => 1300000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "6012-0123-1234-2345",
                "date_expiration_carte_bancaire" => "2033-09-01",
                "code_validation_carte_bancaire" =>  Hash::make("143"),
                "solde_carte_bancaire" => 130000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "6113-1134-2345-3456",
                "date_expiration_carte_bancaire" => "2040-03-12",
                "code_validation_carte_bancaire" =>  Hash::make("163"),
                "solde_carte_bancaire" => 145000,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "6214-2145-3456-4567",
                "date_expiration_carte_bancaire" => "2030-01-01",
                "code_validation_carte_bancaire" =>  Hash::make("983"),
                "solde_carte_bancaire" => 360259,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "numero_carte_bancaire" => "6315-3156-4567-5678",
                "date_expiration_carte_bancaire" => "2036-01-01",
                "code_validation_carte_bancaire" =>  Hash::make("326"),
                "solde_carte_bancaire" => 269302,
                "created_at" => now(),
                "updated_at" => now()
            ]
        ];
        CarteBancaire::insert($carte_bancaires);
    }
}
