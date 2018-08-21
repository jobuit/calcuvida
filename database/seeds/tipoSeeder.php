<?php

use App\TipoAlimento;
use Illuminate\Database\Seeder;

class tipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAlimento::create(['nombre'=>'Proteina']);
        TipoAlimento::create(['nombre'=>'Verdura sin alimidón']);
        TipoAlimento::create(['nombre'=>'Verdura con almidón']);
        TipoAlimento::create(['nombre'=>'Frutas']);
        TipoAlimento::create(['nombre'=>'Bebidas']);
    }
}
