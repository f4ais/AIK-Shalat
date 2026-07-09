<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        Kategori::insert([
            [
                'nama' => 'Dewasa',
                'slug' => 'dewasa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Anak-anak',
                'slug' => 'anak',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}