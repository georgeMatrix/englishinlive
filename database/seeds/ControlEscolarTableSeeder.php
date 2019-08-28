<?php

use Illuminate\Database\Seeder;
use \App\Nivel;
class ControlEscolarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombres = [
            ['nombre'=>'Ingles Comunicativo Inicial'],
            ['nombre'=>'Ingles Comunicativo Superior'],
            ['nombre'=>'Ingles Pre Intermedio'],
            ['nombre'=>'Ingles Intermedio'],
        ];
        foreach ($nombres as $nombre){
            Nivel::create($nombre);
        }

    }
}
