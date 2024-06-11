<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $utilisateurs = [
            [
                "email" => "mohammed.elamrani@email.com",
                "identifiant_utilisateur" => "mohammedelamrani123",
                "password" => Hash::make("password123"),
                "nom_utilisateur" => "El Amrani",
                "prenom_utilisateur" => "Mohammed",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212123456789",
                "adresse_utilisateur" => "2 rue Al haddika",
                "image_utilisateur" => "images/utilisateurs/ilyas.jp
                g",
                "ville_id" => 2,
                "privilege_id" => 2,
                "carte_bancaire_id" => 2,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "fatima.choukri@email.com",
                "identifiant_utilisateur" => "fatimachoukri456",
                "password" => Hash::make("secret@321"),
                "nom_utilisateur" => "Choukri",
                "prenom_utilisateur" => "Fatima",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212987654321",
                "adresse_utilisateur" => "5 rue la résistance",
                "image_utilisateur" => "images/utilisateurs/fatima.choukri.jpeg",
                "ville_id" => 1,
                "privilege_id" => 1,
                "carte_bancaire_id" => 1,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "amina.elkhattab@email.com",
                "identifiant_utilisateur" => "aminaelkhattab789",
                "password" => Hash::make("123456"),
                "nom_utilisateur" => "El Khattab",
                "prenom_utilisateur" => "Amina",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212555555555",
                "adresse_utilisateur" => "63 rue des jardins",
                "image_utilisateur" => "images/utilisateurs/amina.elkhattab.jpeg",
                "ville_id" => 3,
                "privilege_id" => 2,
                "carte_bancaire_id" => 3,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "mohamed.bouhaddou@email.com",
                "identifiant_utilisateur" => "mohamedbouhaddou123",
                "password" => Hash::make("789password"),
                "nom_utilisateur" => "Bouhaddou",
                "prenom_utilisateur" => "Mohamed",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212111111111",
                "adresse_utilisateur" => "25 rue al assala",
                "image_utilisateur" => "images/utilisateurs/mohamed.bouhaddou.jpeg",
                "ville_id" => 4,
                "privilege_id" => 2,
                "carte_bancaire_id" => 4,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "zineb.elmoumen@email.com",
                "identifiant_utilisateur" => "zinebelmoumen456",
                "password" => Hash::make("p@ssw0rd!"),
                "nom_utilisateur" => "El Moumen",
                "prenom_utilisateur" => "Zineb",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212222222222",
                "adresse_utilisateur" => "42 rue al zahra",
                "image_utilisateur" => "images/utilisateurs/zineb.elmoumen.jpeg",
                "ville_id" => 5,
                "privilege_id" => 2,
                "carte_bancaire_id" => 5,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "abdelaziz.amrani@email.com",
                "identifiant_utilisateur" => "abdelazizamrani789",
                "password" => Hash::make("12345secret"),
                "nom_utilisateur" => "Amrani",
                "prenom_utilisateur" => "Abdelaziz",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212333333333",
                "adresse_utilisateur" => "55 rue al wissal",
                "image_utilisateur" => "images/utilisateurs/abdelaziz.amrani.jpeg",
                "ville_id" => 6,
                "privilege_id" => 2,
                "carte_bancaire_id" => 6,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "naima.belkadi@email.com",
                "identifiant_utilisateur" => "naimabelkadi123",
                "password" => Hash::make("09876password"),
                "nom_utilisateur" => "Belkadi",
                "prenom_utilisateur" => "Naima",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212444444444",
                "adresse_utilisateur" => "77 rue la siesta",
                "image_utilisateur" => "images/utilisateurs/naima.belkadi.jpeg",
                "ville_id" => 7,
                "privilege_id" => 2,
                "carte_bancaire_id" => 7,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "hicham.cherkaoui@email.com",
                "identifiant_utilisateur" => "hichamcherkaoui456",
                "password" => Hash::make("myP@ssword"),
                "nom_utilisateur" => "Cherkaoui",
                "prenom_utilisateur" => "Hicham",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212555555555",
                "adresse_utilisateur" => "42 rue al ghizlane",
                "image_utilisateur" => "images/utilisateurs/hicham.cherkaoui.jpeg",
                "ville_id" => 8,
                "privilege_id" => 2,
                "carte_bancaire_id" => 8,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "samira.elalaoui@email.com",
                "identifiant_utilisateur" => "samiraelalaoui789",
                "password" => Hash::make("mySecret!"),
                "nom_utilisateur" => "El Alaoui",
                "prenom_utilisateur" => "Samira",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212666666666",
                "adresse_utilisateur" => "88 rue al hammama",
                "image_utilisateur" => "images/utilisateurs/samira.elalaoui.jpg",
                "ville_id" => 9,
                "privilege_id" => 2,
                "carte_bancaire_id" => 9,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "youssef.mahmoudi@email.com",
                "identifiant_utilisateur" => "youssefmahmoudi123",
                "password" => Hash::make("p@ssword123"),
                "nom_utilisateur" => "Mahmoudi",
                "prenom_utilisateur" => "Youssef",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212777777777",
                "adresse_utilisateur" => "63 rue al massira",
                "image_utilisateur" => "images/utilisateurs/youssef.mahmoudi.jpeg",
                "ville_id" => 10,
                "privilege_id" => 2,
                "carte_bancaire_id" => 10,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "latifa.hassani@email.com",
                "identifiant_utilisateur" => "latifahassani456",
                "password" => Hash::make("secret@09876"),
                "nom_utilisateur" => "Hassani",
                "prenom_utilisateur" => "Latifa",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212888888888",
                "adresse_utilisateur" => "54 rue sanawbar",
                "image_utilisateur" => "images/utilisateurs/latifa.hassani.jpg",
                "ville_id" => 11,
                "privilege_id" => 2,
                "carte_bancaire_id" => 11,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "imane.zeroual@email.com",
                "identifiant_utilisateur" => "imanezeroual789",
                "password" => Hash::make("password@123"),
                "nom_utilisateur" => "Zeroual",
                "prenom_utilisateur" => "Imane",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212999999999",
                "adresse_utilisateur" => "66 rue nord",
                "image_utilisateur" => "images/utilisateurs/imane.zeroual.jpg",
                "ville_id" => 12,
                "privilege_id" => 2,
                "carte_bancaire_id" => 12,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "omar.elkabir@email.com",
                "identifiant_utilisateur" => "omar_elkabir_123",
                "password" => Hash::make("mySecret!"),
                "nom_utilisateur" => "El Kabir",
                "prenom_utilisateur" => "Omar",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212121212121",
                "adresse_utilisateur" => "12 rue la ceinture",
                "image_utilisateur" => "images/utilisateurs/omar.elkabir.jpeg",
                "ville_id" => 13,
                "privilege_id" => 2,
                "carte_bancaire_id" => 13,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "sara.elamrani@email.com",
                "identifiant_utilisateur" => "saraelamrani456",
                "password" => Hash::make("p@ssword123"),
                "nom_utilisateur" => "El Amrani",
                "prenom_utilisateur" => "Sara",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212131313131",
                "adresse_utilisateur" => "22 rue el hamra",
                "image_utilisateur" => "images/utilisateurs/sara.elamrani.jpg",
                "ville_id" => 14,
                "privilege_id" => 2,
                "carte_bancaire_id" => 14,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "kamal.benali@email.com",
                "identifiant_utilisateur" => "kamalbenali789",
                "password" => Hash::make("secret@98765"),
                "nom_utilisateur" => "Benali",
                "prenom_utilisateur" => "Kamal",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212141414141",
                "adresse_utilisateur" => "12 rue al wald",
                "image_utilisateur" => "images/utilisateurs/kamal.benali.jpeg",
                "ville_id" => 15,
                "privilege_id" => 2,
                "carte_bancaire_id" => 15,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "nadia.zaidi@email.com",
                "identifiant_utilisateur" => "nadiazaidi123",
                "password" => Hash::make("myP@ssword!"),
                "nom_utilisateur" => "Zaidi",
                "prenom_utilisateur" => "Nadia",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212151515151",
                "adresse_utilisateur" => "18 rue al najma",
                "image_utilisateur" => "images/utilisateurs/nadia.zaidi.jpg",
                "ville_id" => 16,
                "privilege_id" => 2,
                "carte_bancaire_id" => 16,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "hassan.elhassani@email.com",
                "identifiant_utilisateur" => "hassanelhassani456",
                "password" => Hash::make("password1234"),
                "nom_utilisateur" => "El Hassani",
                "prenom_utilisateur" => "Hassan",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212161616161",
                "adresse_utilisateur" => "16 rue menara",
                "image_utilisateur" => "images/utilisateurs/hassan.elhassani.jpeg",
                "ville_id" => 17,
                "privilege_id" => 2,
                "carte_bancaire_id" => 17,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "aicha.elouafi@email.com",
                "identifiant_utilisateur" => "aichaelouafi789",
                "password" => Hash::make("secret!@#"),
                "nom_utilisateur" => "El Ouafi",
                "prenom_utilisateur" => "Aicha",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212171717171",
                "adresse_utilisateur" => "163 rue el mahraz",
                "image_utilisateur" => "images/utilisateurs/aicha.elouafi.jpeg",
                "ville_id" => 18,
                "privilege_id" => 2,
                "carte_bancaire_id" => 18,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "yassin.moussaoui@email.com",
                "identifiant_utilisateur" => "yassinmoussaoui123",
                "password" => Hash::make("mySecret@123"),
                "nom_utilisateur" => "Moussaoui",
                "prenom_utilisateur" => "Yassin",
                "sexe_utilisateur" => "Homme",
                "telephone_utilisateur" => "+212181818181",
                "adresse_utilisateur" => "23 rue rassouk",
                "image_utilisateur" => "images/utilisateurs/yassin.moussaoui.jpeg",
                "ville_id" => 19,
                "privilege_id" => 1,
                "carte_bancaire_id" => 19,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "email" => "leila.haouach@email.com",
                "identifiant_utilisateur" => "leilahaouach456",
                "password" => Hash::make("password!@#"),
                "nom_utilisateur" => "Haouach",
                "prenom_utilisateur" => "Leila",
                "sexe_utilisateur" => "Femme",
                "telephone_utilisateur" => "+212191919191",
                "adresse_utilisateur" => "27 rue dar loulama",
                "image_utilisateur" => "images/utilisateurs/leila.haouach.jpg",
                "ville_id" => 20,
                "privilege_id" => 2,
                "carte_bancaire_id" => 20,
                "email_verified_at" => now(),
                "created_at" => now(),
                "updated_at" => now()
            ]

        ];

        foreach($utilisateurs as $utilisateur) {
            // Store the image
            $imagePath = $utilisateur['image_utilisateur'];
            $imageContents = file_get_contents(public_path($imagePath));
            $imageName = basename($imagePath);

            Storage::put('public/images/utilisateurs/' . $imageName, $imageContents);
        }
        
        User::insert($utilisateurs);
    }
}
