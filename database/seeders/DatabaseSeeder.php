<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            // Panggil kedua seeder kustom Anda
            AdminUserSeeder::class,
            ServiceSeeder::class,
            
            // Anda bisa tambahkan seeder lain di sini jika ada
        ]);
    }
}