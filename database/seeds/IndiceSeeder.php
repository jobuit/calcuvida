<?php

use App\IndiceGlucemico;
use Illuminate\Database\Seeder;

class IndiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IndiceGlucemico::create(['nombre'=>'Alto']);
        IndiceGlucemico::create(['nombre'=>'Medio']);
        IndiceGlucemico::create(['nombre'=>'Bajo']);
    }
}
