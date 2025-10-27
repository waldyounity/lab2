<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create(['nombre' => 'Electronicos']);
        Categoria::create(['nombre' => 'Hogar']);
        Categoria::create(['nombre' => 'Deportes']);
    }
}
