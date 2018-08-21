<?php

use App\CategoriaAlimentos;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoriaAlimentos::create(['nombre'=>'Cereal']);
        CategoriaAlimentos::create(['nombre'=>'Frutas']);
        CategoriaAlimentos::create(['nombre'=>'Verduras']);
        CategoriaAlimentos::create(['nombre'=>'Tuberculos']);
        CategoriaAlimentos::create(['nombre'=>'Leguminosas']);
        CategoriaAlimentos::create(['nombre'=>'Lacteos']);
        CategoriaAlimentos::create(['nombre'=>'Alimentos procesados']);
        CategoriaAlimentos::create(['nombre'=>'Harinas']);
        CategoriaAlimentos::create(['nombre'=>'Bebidas']);
        CategoriaAlimentos::create(['nombre'=>'Platanos']);
        CategoriaAlimentos::create(['nombre'=>'Frutos secos']);
    }
}
