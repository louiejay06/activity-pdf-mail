<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        $cl = [
            [
                'last_name' => 'Sacedon',
                'first_name' => 'Christian James',
                'middle_name' => 'Rulona',
                'address' => 'Purok 3. Tinangnan, Tubigon, Bohol',
                'birth_date' => '2001-10-18',
                'phone_number' => '09486306766',
                'email' => 'christiansacedon3@gmail.com',
                'initial_deposit' => 10000
            ],
            [
                'last_name' => 'Jack',
                'first_name' => 'Ripper',
                'middle_name' => 'Mercha',
                'address' => ' Clover, Japan',
                'birth_date' => '1967-11-03',
                'phone_number' => '09307665033',
                'email' => 'christiansacedon5@gmail.com',
                'initial_deposit' => 10000
            ]

        ];

        foreach($cl as $c) {
            Client::create($c);
        }
    }
}
