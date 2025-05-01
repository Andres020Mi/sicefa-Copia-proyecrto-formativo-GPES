<?php

namespace Modules\GPES\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\SICA\Entities\App;


class AppTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        /* Registro o actualización de la nueva aplicación para Estación de GPES */
        $app = App::updateOrCreate(['name' => 'GPES'], [
            'url' => '/GPES/welcome',
            'color' => '#76250C',
            'icon' => 'fas fa-mug-hot',
            'description' => 'Control de asignaciones de equipos , erramientas de laboratorio bienes y enceres',
            'description_english' => 'Equipment and lab tools assignment control',
        ]);

   
    }
}
