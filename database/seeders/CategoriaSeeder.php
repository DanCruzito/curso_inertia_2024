<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
          'nombre' => 'Celulares',
          'descripcion' => 'Tecnología'
        ]);

        Categoria::create([
            'nombre' => 'Electrodomesticos',
            'descripcion' => 'Televisión, Radio y mas'
          ]);

          Categoria::create([
            'nombre' => 'Ropas',
            'descripcion' => 'Abrigos, zapatos y mas'
          ]);
    }
}
