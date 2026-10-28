<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Customer::query()->createMany([
            ['full_name' => 'Ava Santos', 'email' => 'ava.santos@example.com', 'phone' => '0917-555-0101'],
            ['full_name' => 'Liam Cruz', 'email' => 'liam.cruz@example.com', 'phone' => '0917-555-0102'],
            ['full_name' => 'Mia Reyes', 'email' => 'mia.reyes@example.com', 'phone' => '0917-555-0103'],
            ['full_name' => 'Noah Garcia', 'email' => 'noah.garcia@example.com', 'phone' => '0917-555-0104'],
            ['full_name' => 'Isla Flores', 'email' => 'isla.flores@example.com', 'phone' => '0917-555-0105'],
        ]);

        User::query()->createMany([
            ['username' => 'jordan.lee', 'full_name' => 'Jordan Lee'],
            ['username' => 'camila.torres', 'full_name' => 'Camila Torres'],
            ['username' => 'ethan.lim', 'full_name' => 'Ethan Lim'],
            ['username' => 'sofia.navarro', 'full_name' => 'Sofia Navarro'],
            ['username' => 'mateo.villanueva', 'full_name' => 'Mateo Villanueva'],
        ]);
    }
}
