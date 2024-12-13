<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Producto::create([
           'descripcion' => 'SMARTHPONE',
           'nombre' => 'SAMSUNG A15',
           'precio' => 1600,
            'stock' => 500,
            'categoria_id' => 1
       ]);

       Producto::create([
        'descripcion' => 'SMARTHPONE',
        'nombre' => 'HONOR',
        'precio' => 1750,
         'stock' => 500,
         'categoria_id' => 1
    ]);

    Producto::create([
        'descripcion' => 'SMARTHPONE',
        'nombre' => 'TECNO',
        'precio' => 1200,
         'stock' => 500,
         'categoria_id' => 1
    ]);

    Producto::create([
        'descripcion' => 'SMARTHPONE',
        'nombre' => 'SAMSUNG A55',
        'precio' => 175,
         'stock' => 400,
         'categoria_id' => 1
    ]);
    }
}
